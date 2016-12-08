<?php
namespace documentCreator;
use documentCreator\Tool;

/**
 * 生成PHP扩展的PHP文档代码的类库
 */

class Document
{
    private $extension;
    const DICT_PATH = './dict/';
    const NOTES_PATH = './notes/';
    const DOC_PATH = './output/';
    private static $_dicts = array();
    private static $_exports = array();
    public function __construct($extension)
    {
        if (!is_array($extension)) {
            $this->extension[] = $extension;
        } else {
            $this->extension = array_unique($extension);
        }
    }

    public function create()
    {
        foreach($this->extension as $ext) {
            if (!extension_loaded($ext)) {
                echo $ext.'扩展尚未安装或未开启该扩展';
                continue;
            }
            $data = $this->compare($ext);
            $this->__createDoc($ext, $data);
        }
    }

    private function __createDoc($ext, $data)
    {
        $common = $content = "<?php\n/**\n* ".ucfirst($ext)."自动补全类(基于最新的".$data['version']."版本)\n* @author shixinke(http://www.shixinke.com)\n* @modified ".date("Y/m/d")."\n*/\n";

        $data['comment'] = str_replace("\n", "\n*", "\n".$data['comment']);
        $content .= "\n/**".$data['comment']."\n*/\n";
        if (empty($data['ini'])) {
            $content .= "    * php.ini配置选项: \n";
            foreach ($data['ini'] as $k=>$v) {
                $content .= "    * //".$v['comment'];
                if (isset($v['options']) && !empty($v['options'])) {
                    $content .= '[备选值：';
                    foreach($v['options'] as $ok=>$ov) {
                        $content .= $ov['value'].'('.$ov['comment'].');';
                    }
                    $content .= ']';
                }
                $content .= "\n";
                $content .= "     *   ".$k.'='.$v['value']."\n";
            }
            $content .= "\n";
        }
        foreach($data['constants'] as $k=>$v){
            if (!is_numeric($v['value'])) {
                $v['value'] = "'".$v["value"]."'";
            }
            $content .= "/**\n".$v['comment']."\n*/\n";
            $content .= "define('".$k."', ".$v['value'].");\n";
        }
        foreach($data['functions'] as $m=>$mv) {
            $mv['comment'] = str_replace("\n", "\n     *", "\n".$mv['comment']);
            $content .= "/**\n* ".$mv['comment']."\n";
            $content .= "* @example ".$mv['example']."\n";

            $params = '';
            if (isset($mv['parameters'])) {
                foreach($mv['parameters'] as $param=>$paramValue) {
                    $content .= "* @param ";
                    if ($paramValue['type'] == 'array') {
                        $params .= 'Array $'.$param;
                        $content .= 'array $'.$param;
                    } else if ($paramValue['type'] == 'callable') {
                        $params .= 'Callable $'.$param;
                        $content .= 'callable $'.$param;
                    } else {
                        if ($paramValue['type'] == 'unknown') {
                            $content .= 'mixed $'.$param;
                        } else {
                            $content .= $paramValue['type'].' $'.$param;
                        }
                        $params .= '$'.$param;
                    }
                    if (isset($paramValue['value'])) {
                        $params .= " = ".$paramValue['value'];
                    }
                    if (isset($dict['methods'][$m]['parameters'][$param])) {
                        if (isset($paramValue['comment'])) {
                            $content .= ':'.$paramValue['comment']." ";
                        }
                        if (isset($paramValue['options']) && !empty($paramValue['options'])) {
                            $content .= '[备选值：';
                            foreach($paramValue['options'] as $ok=>$ov) {
                                $content .= $ov['value'].'('.$ov['comment'].');';
                            }
                            $content .= ']';
                        }
                    }
                    $params .= ', ';
                    $content .= "\n";
                }
                $params = trim($params);
                $params = trim($params, ',');

            }
            $content .= "* @return ".$mv['return']."\n*/\n";

            $content .= "function ".$m."(";
            $content .= $params;
            $content .= ")\n{\n";
            $content .=  "}\n\n";
        }

        //将函数与常量定义放到一个文件
        $classes = array_keys($data['classes']);
        $extContent = $content;
        $res = true;
        //创建目录
        Tool::createDir(self::DOC_PATH, ucfirst($ext));
        $baseDir = self::DOC_PATH.ucfirst($ext).'/';
        if (!in_array($ext, $classes)) {
            $res = file_put_contents($baseDir.$ext.'.php', $content);
        }

        if (isset($data['classes']) && !empty($data['classes'])) {
            foreach($data['classes'] as $class=>$value) {
                if ($class != $ext) {
                    $content = $common;
                    $value['comment'] = str_replace("\n", "\n*", "\n".$value['comment']);
                    $content .= "\n/**".$value['comment']."\n*/\n";
                } else {
                    $content = $extContent;
                }

                $arr = explode("\\", $class);
                $namespace = '';
                $count = count($arr);
                if ($count >= 2) {
                    $class = $arr[$count-1];
                    array_pop($arr);
                    $namespace = trim(implode("\\", $arr), "\\");
                    $content .= 'namespace '.$namespace.";\n";
                }
                if (isset($value['isInterface'])) {
                    $content .= "interface ".$class;
                } else {
                    if (isset($value['isAbstract'])) {
                        $content .= 'abstract ';
                    }
                    if (isset($value['isFinal']) && $value['isFinal']) {
                        $content .= 'final ';
                    }
                    $content .= 'class '.$class;
                    if (isset($value['extends'])) {
                        if ($namespace != '') {
                            $value['extends'] = "\\".$value['extends'];
                        }
                        $content .= ' extends '.$value['extends'];
                    }
                }
                $content .= "\n{\n";
                foreach($value['consts'] as $const=>$val) {
                    $val['comment'] = str_replace("\n", "\n    *", "\n".$val['comment']);
                    $content .= "    /**     ".$val['comment'];
                    $content .= "\n    */\n    const ".$const;
                    if (isset($val['value'])) {
                        if (!is_numeric($val['value'])) {
                            $val['value'] = "'".$val['value']."'";
                        }
                        $content .= "    =    ".$val['value'];
                    }
                    $content .= ";\n\n";
                }
                foreach($value['properties'] as $p=>$pv) {
                    $pv['comment'] = str_replace("\n", "\n     *", "\n".$pv['comment']);
                    $content .= "    /**\n     * @var ".$pv['type']." $".$p." ".$pv['comment']."\n     */\n";

                    $content .= '    '.$pv['access'];
                    if ($pv['isStatic']) {
                        $content .= ' static ';
                    }
                    $content .= " $".$p;
                    if (isset($pv['value']) && !is_null($pv['value'])) {
                        if (!is_numeric($pv['value'])) {
                            $pv['value'] = "'".$pv['value']."'";
                        }
                        $content .= '    =    '.$pv['value'];
                    }
                    $content .=  ";\n";
                }
                foreach($value['methods'] as $m=>$mv) {
                    $mv['comment'] = str_replace("\n", "\n     *", "\n".$mv['comment']);
                    $content .= "    /**\n     * ".$mv['comment']."\n";
                    $mv['example'] = str_replace("\n", "\n     * ", $mv['example']);
                    $content .= "     * @example ".$mv['example']."\n";
                    $params = '';
                    if (isset($mv['parameters']) && !empty($mv['parameters'])) {
                        foreach($mv['parameters'] as $param=>$paramValue) {
                            if (is_array($paramValue['type'])) {
                                $paramValue['type'] = isset($paramValue[0]) ? $paramValue[0] : 'unknown';
                            }
                            $content .= "     * @param ";
                            if ($paramValue['type'] == 'array') {
                                $params .= 'Array $'.$param;
                                $content .= 'array $'.$param;
                            } else if ($paramValue['type'] == 'callable') {
                                $params .= 'Callable $'.$param;
                                $content .= 'callable $'.$param;
                            } else {
                                if (!$paramValue['type'] || ($paramValue['type'] == '')) {
                                    $paramValue['type'] = 'mixed';
                                }
                                if ($paramValue['type'] == 'unknown') {
                                    $content .= ' mixed $'.$param;
                                } else {
                                    $content .= $paramValue['type'].' $'.$param;
                                }
                                $params .= '$'.$param;
                            }
                            if (isset($paramValue['value'])) {
                                $params .= " = ".$paramValue['value'];
                            }
                            $content .= " ".$paramValue['comment'];
                            if (isset($paramValue['options']) && !empty($paramValue['options'])) {
                                $content .= '[备选值：';
                                foreach($paramValue['options'] as $ok=>$ov) {
                                    $content .= $ov['value'].'('.$ov['comment'].')';
                                }
                                $content .= ']';
                            }
                            $params .= ', ';
                            $content .= "\n";
                        }
                        $params = trim($params);
                        $params = trim($params, ',');
                    }
                    $content .= "     * @return ".$mv['return']."\n     */\n";
                    $content .= "    ".$mv['access'];
                    if ($mv['isStatic']) {
                        $content .= ' static ';
                    }
                    if (isset($mv['isFinal'])) {
                        $content .= ' final ';
                    }
                    if (isset($mv['isAbstract'])) {
                        $content .= ' abstract ';
                    }

                    $content .= " function ".$m."(";
                    $content .= $params;
                    $content .= ")";
                    if (isset($mv['isAbstract'])) {
                        $content .= ";\n\n";
                    } else {
                        $content .= "\n    {\n    }\n\n";
                    }
                }

                $content .= "}\n\n";
                if ($namespace != '') {
                    $fullDir = Tool::createDir(self::DOC_PATH, $namespace);
                } else {
                    $fullDir = $baseDir;
                }


                $fileName = $fullDir.'/'.$class.'.php';
                $res = file_put_contents($fileName, $content);
            }
        }

        return $res;
    }

    public function createDict()
    {
        foreach($this->extension as $ext) {
            if (!extension_loaded($ext)) {
                echo $ext.'扩展尚未安装或未开启该扩展';
                continue;
            }
            $data = Tool::export($ext);
            $tmp = $data;
            unset($tmp['classes']);
            $this->__createDict(strtolower($ext), $tmp);
            foreach($data['classes'] as $k=>$v) {
                $fileName = strtolower(str_replace("\\", "_", $k));
                $this->__createDict($fileName, $v);
            }
        }
    }

    private function __createDict($ext, $data)
    {
        $content = json_encode($data);
        return file_put_contents(self::DICT_PATH.strtolower($ext).'.json', $content);
    }

    public function updateDict($ext, $data)
    {
        $tmp = $data;
        unset($tmp['classes']);
        $this->__createDict($ext, $tmp);
        foreach($data['classes'] as $k=>$v) {
            $fileName = strtolower(str_replace("\\", "_", $k));
            $this->__createDict($fileName, $v);
        }
    }

    public function getDict($extName)
    {
        $extName = strtolower($extName);
        if (empty(self::$_dicts) || !isset(self::$_dicts[$extName])) {
            $files = scandir(self::DICT_PATH);
            $arr = array();
            foreach($files as $file) {
                if (stripos($file, strtolower($extName)) == 0) {
                    $content = file_get_contents(self::DICT_PATH.$file);
                    $arr[str_replace('.json', '', $file)] = json_decode($content, true);
                }
            }
            self::$_dicts[$extName] = $arr;
        }
        return self::$_dicts[$extName];
    }

    public function getExports($extName)
    {
        $extName = strtolower($extName);
        if (empty(self::$_exports) || !isset(self::$_exports[$extName])) {
            self::$_exports[$extName] = Tool::export($extName);
        }
        return self::$_exports[$extName];
    }

    public function compare($extName)
    {
        $dict = $this->getDict($extName);
        $exportData = $this->getExports($extName);
        if (isset($dict[$extName]['comment']) && ($dict[$extName]['comment'] != '')) {
            $exportData['comment'] = $dict[$extName]['comment'];
        }
        foreach($exportData['constants'] as $k=>$v) {
            if (isset($dict[$extName]['constants'][$k])) {
                $exportData['constants'][$k]['comment'] = $dict[$extName]['constants'][$k]['comment'];
            } else {
                $dict[$extName]['constants'][$k] = $exportData['constants'][$k];
            }
        }
        foreach($exportData['ini'] as $k=>$v) {
            if (isset($dict[$extName]['ini'][$k])) {
                $exportData['ini'][$k]['comment'] = $dict[$extName]['ini'][$k]['comment'];
                $exportData['ini'][$k]['options'] = $dict[$extName]['ini'][$k]['options'];
            } else {
                $dict[$extName]['ini'][$k] = $exportData['ini'][$k];
            }
        }

        foreach($exportData['functions'] as $k=>$v) {
            if (isset($dict[$extName]['functions'][$k])) {
                $exportData['functions'][$k]['comment'] = $dict[$extName]['functions'][$k]['comment'];
                $exportData['functions'][$k]['return'] = $dict[$extName]['functions'][$k]['return'];
                $exportData['functions'][$k]['example'] = $dict[$extName]['functions'][$k]['example'];
                if (isset($dict[$extName]['functions'][$k]['parameters']) && !empty($dict[$extName]['functions'][$k]['parameters'])) {
                    $exportData['functions'][$k]['parameters'] = $dict[$extName]['functions'][$k]['parameters'];
                } else {
                    $dict[$extName]['functions'][$k]['parameters'] = $exportData['functions'][$k]['parameters'];
                }
            }
        }
        foreach($exportData['classes'] as $k=>$v) {
            $fileName = strtolower(str_replace("\\", '_', $k));
            if (isset($dict[$fileName]['comment']) && ($dict[$fileName]['comment'] != '')) {
                $exportData['classes'][$k]['comment'] = $dict[$fileName]['comment'];
            }
            foreach($v['consts'] as $key=>$val) {
                if (isset($dict[$fileName]['consts'][$key]['comment']) && ( $dict[$fileName]['consts'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['consts'][$key]['comment'] = $dict[$fileName]['consts'][$key]['comment'];
                    $exportData['classes'][$k]['consts'][$key]['type'] = $dict[$fileName]['consts'][$key]['type'];
                }
            }
            foreach($v['properties'] as $key=>$val) {
                if (isset($dict[$fileName]['properties'][$key]['comment']) && ( $dict[$fileName]['properties'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['properties'][$key]['comment'] = $dict[$fileName]['properties'][$key]['comment'];
                }
                if (isset($dict[$fileName]['properties'][$key]['type']) && ( $dict[$fileName]['properties'][$key]['type'] != '')) {
                    $exportData['classes'][$k]['properties'][$key]['type'] = $dict[$fileName]['properties'][$key]['type'];
                }
            }
            foreach($v['methods'] as $key=>$val) {
                if (isset($dict[$fileName]['methods'][$key]['comment']) && ( $dict[$fileName]['methods'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['methods'][$key]['comment'] = $dict[$fileName]['methods'][$key]['comment'];
                }
                if (isset($dict[$fileName]['methods'][$key]['return']) && ( $dict[$fileName]['methods'][$key]['return'] != '')) {
                    $exportData['classes'][$k]['methods'][$key]['return'] = $dict[$fileName]['methods'][$key]['return'];
                }
                if (isset($dict[$fileName]['methods'][$key]['example']) && ( $dict[$fileName]['methods'][$key]['example'] != '')) {
                    $exportData['classes'][$k]['methods'][$key]['example'] = $dict[$fileName]['methods'][$key]['example'];
                }
                if (isset($val['parameters']) && !empty($val['parameters'])) {
                    foreach($val['parameters'] as $pk=>$pv) {
                        if (isset($dict[$fileName]['methods'][$key]['parameters'][$pk]['comment']) && ( $dict[$fileName]['methods'][$key]['parameters'][$pk]['comment'] != '')) {
                            $exportData['classes'][$k]['methods'][$key]['parameters'][$pk]['comment'] = $dict[$fileName]['methods'][$key]['comment'];
                        }
                        if (isset($dict[$fileName]['methods'][$key]['parameters'][$pk]['type']) && ( $dict[$fileName]['methods'][$key]['parameters'][$pk]['type'] != '')) {
                            $exportData['classes'][$k]['methods'][$key]['parameters'][$pk]['type'] = $dict[$fileName]['methods'][$key]['parameters'][$pk]['type'];
                        }
                        if (isset($dict[$fileName]['methods'][$key]['parameters'][$pk]['options']) && !empty($dict[$fileName]['methods'][$key]['parameters'][$pk]['options'])) {
                            $exportData['classes'][$k]['methods'][$key]['parameters'][$pk]['options'] = $dict[$fileName]['methods'][$key]['parameters'][$pk]['options'];
                        }
                    }
                }
            }
        }
        return $exportData;
    }
}
