<?php
/**
 * 将源代码的文档转化为数组输出
 * @author shixinke<ishixinke@qq.com>
 * @modified 2016/12/07
 *
 * @example
 * <pre>
 * $t = new Transform('./notes/redis.php');
 * var_dump($t->info('X', ''));
 * </pre>
 */

namespace phpDocumentCreator;
use \Exception as Exception;
use phpDocumentCreator\Tool;
use phpDocumentCreator\docParser\Parser as Parser;
class Transform
{
    //为了防止冲突，这是某类或函数的原本名称
    private $prefix;

    /**
     * Transform constructor.
     * @param string $fileName:源码文件(利用其注释)
     * @param string $prefix:类库名称(如果不填写，则获取文件名，如Redis)
     * @throws Exception
     */
    public function __construct($fileName, $prefix = '')
    {
        if (!is_file($fileName)) {
            throw new Exception('the file '.$fileName.' does not exists!');
            return false;
        }
        try {
            require_once($fileName);
            if ($prefix == '') {
                $prefix = basename($fileName, '.php');
            }
            $this->prefix = strtolower($prefix);
        } catch(Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * 导出指定类的对象信息及注释
     * @param string $unique:为了防止冲突添加的标识符(如因为已经安装了Redis扩展，就不能使用Redis这个类了，所以加X为RedisX，可以获取RedisX的类信息)
     * @param string $delimiter：分隔符(如Redis扩展的类是RedisArray,RedisCluster这样的，就没有分隔符，有的扩展如Swoole,是Swoole_server以_分隔)
     * @return array
     */
    public function  info($unique = 'X', $delimiter = '_')
    {
        $data = Tool::export(ucfirst($this->prefix).$unique, true, $delimiter);
        $prefixData = array();
        if (!empty($data)) {
            $prefixData = $data;
            $prefixData['constants'] = $prefixData['functions'] = $prefixData['classes'] = array();
            foreach($data['constants'] as $ck=>$cv) {
                $cName = str_ireplace(strtoupper($this->prefix).$unique, $this->prefix, $ck);
                $prefixData['constants'][strtoupper($cName)] = $cv;
            }
            foreach($data['functions'] as $func=>$value) {
                $funcName = str_ireplace(strtolower($this->prefix).$unique, $this->prefix, $func);
                $value['comment'] = str_ireplace(strtolower($this->prefix).$unique, $this->prefix, $value['comment']);
                $prefixData['functions'][$funcName] = $value;
            }
            foreach($data['classes'] as $className=>$class) {
                $doc = $this->getDoc($class['comment']);
                $data['classes'][$className]['comment'] = str_ireplace(strtolower($this->prefix).$unique, $this->prefix, $doc['desc']);
                foreach($class['consts'] as $const=>$cv) {
                    $doc = $this->getDoc($cv['comment']);
                    $data['classes'][$className]['consts'][$const]['comment'] = $doc['desc'];
                }
                foreach($class['properties'] as $property=>$pv) {
                    $doc = $this->getDoc($pv['comment']);
                    $doc['desc'] = str_ireplace(strtolower($this->prefix).$unique, $this->prefix, $doc['desc']);
                    $data['classes'][$className]['properties'][$property]['comment'] = $doc['desc'];
                    $data['classes'][$className]['properties'][$property]['example'] = $doc['params']['example'];
                }
                foreach($class['methods'] as $mt=>$mv) {
                    $doc = $this->getDoc($mv['comment']);
                    $doc['desc'] = str_ireplace(strtolower($this->prefix).$unique, $this->prefix, $doc['desc']);
                    $data['classes'][$className]['methods'][$mt]['comment'] = $doc['desc'];
                    $data['classes'][$className]['methods'][$mt]['return'] = $doc['params']['return'];
                    $data['classes'][$className]['methods'][$mt]['example'] = $doc['params']['example'];
                    if (!empty($doc['params']['param'])) {
                        foreach($doc['params']['param'] as $p=>$pa) {
                            $data['classes'][$className]['methods'][$mt]['parameters'][$p]['type'] = $pa['type'];
                            $data['classes'][$className]['methods'][$mt]['parameters'][$p]['comment'] = $pa['comment'];
                        }

                    }
                }
                $prefixClassName = str_ireplace($this->prefix.$unique, $this->prefix, $className);
                $prefixData['classes'][$prefixClassName] = $data['classes'][$className];
            }
        }
        return $prefixData;
    }

    /**
     * 返回注释解析对象
     * @param $doc
     * @return Parser
     */
    private function  parse($doc)
    {
        $parser = new Parser($doc);
        $parser->parse();
        return $parser;
    }

    /**
     * 获取注释信息
     * @param string $doc:注释内容
     * @return mixed
     */
    public function getDoc($doc)
    {
        $parser = $this->parse($doc);
        $data['desc'] = '';
        $data['params'] = array();
        if ($parser) {
            $desc = $parser->getShortDesc();
            if (!$desc) {
                $desc = $parser->getDesc();
            }
            $data['desc'] = $desc;
            $data['params'] = $parser->getParams();
        }

        return $data;
    }
}



