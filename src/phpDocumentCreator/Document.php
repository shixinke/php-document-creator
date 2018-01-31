<?php
namespace phpDocumentCreator;
use phpDocumentCreator\Tool;

/**
 * 生成PHP扩展的PHP文档代码的类库
 */

class Document
{
    private $extension;
    const DICT_PATH = DICT_PATH;
    const NOTES_PATH = NOTE_PATH;
    const DOC_PATH = OUTPUT_PATH;
    private static $_dicts = array();
    private static $_exports = array();
    private static $_remainData = false;
    public function __construct($extension)
    {
        $finalDictPath = self::DICT_PATH.DS.$extension;
        if (!file_exists($finalDictPath)) {
            mkdir($finalDictPath);
        }
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
        if (!empty($data['ini'])) {
            $content .= "/**\n * php.ini配置选项: \n\n";
            foreach ($data['ini'] as $k=>$v) {
                $content .= " * ".$v['comment'];
                if (isset($v['options']) && !empty($v['options'])) {
                    $content .= '[备选值：';
                    foreach($v['options'] as $ok=>$ov) {
                        $content .= $ov['value'].'('.$ov['comment'].');';
                    }
                    $content .= ']';
                }
                $content .= "\n";
                $content .= " * ".$k.'='.$v['value']."\n\n";
            }
            $content .= "*/\n";
        }
        foreach($data['constants'] as $k=>$v){
            if (!is_numeric($v['value'])) {
                $v['value'] = "'".$v["value"]."'";
            }
            $content .= "/**\n".$v['comment']."\n*/\n";
            $content .= "define('".$k."', ".$v['value'].");\n";
        }
        foreach($data['functions'] as $m=>$mv) {
            $mv['comment'] = str_replace("\n", "\n*", "\n".$mv['comment']);
            $content .= "/**\n* ".$mv['comment']."\n";
            $mv['example'] = str_replace("\n", "\n* ", "\n".$mv['example']);
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
                            if (is_array($paramValue['type'])) {
                                $paramValue['type'] = trim(implode('|', $paramValue['type']), '|');
                            }
                            $content .= $paramValue['type'].' $'.$param;
                        }
                        $params .= '$'.$param;
                    }
                    if (isset($paramValue['value'])) {
                        $params .= " = ".$paramValue['value'];
                    }
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
        $baseDir = self::DOC_PATH.DS.ucfirst($ext).'/';
        if (!self::inArray($ext, $classes) ) {
            if (!empty($data['classes'])) {
                $tmp = $data['classes'];
                $tmp = array_pop($tmp);
                if ($tmp['namespace'] != '') {
                    $res = self::writeFile($baseDir.$ext.'.namespace.php', $content);
                } else {
                    $res = self::writeFile($baseDir.$ext.'.php', $content);
                }
            } else {
                $res = self::writeFile($baseDir.$ext.'.php', $content);
            }
        }

        if (isset($data['classes']) && !empty($data['classes'])) {
            foreach($data['classes'] as $class=>$value) {
                if (strtolower($class) != strtolower($ext)) {
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
                    $pv['comment'] = str_replace("\n", "\n     * ", "\n".$pv['comment']);
                    if (strpos($pv['comment'], '@var')) {
                        $content .= "    /**\n     * ".$pv['comment']."\n";
                    } else {
                        $content .= "    /**\n     * @var ".$pv['type']." $".$p." ".$pv['comment']."\n";
                    }
                    $pv['access'] = isset($pv['access']) ? $pv['access'] : 'public';
                    $content .= "     * @access ".$pv['access']."\n";
                    if (isset($pv['example'])) {
                        $pv['example'] = str_replace("\n", "\n     * ", "\n".$pv['example']);
                        $content .= "     * @example ".$pv['example']."\n";
                    }
                    $content .= "     */\n";
                    $content .= '    '.$pv['access'];
                    if (isset($pv['isStatic']) && $pv['isStatic']) {
                        $content .= ' static ';
                    }
                    $content .= " $".$p;
                    if (isset($pv['value']) && !is_null($pv['value'])) {
                        if (!is_numeric($pv['value'])) {
                            if (is_array($pv['value'])) {
                                $pv['value'] = " array() ";
                            } else {
                                $pv['value'] = "'".$pv['value']."'";
                            }

                        }
                        $content .= '    =    '.$pv['value'];
                    }
                    $content .=  ";\n\n";
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
                    if (!isset($mv['access'])) {
                        $mv['access'] = 'public';
                    }
                    $content .= "    ".$mv['access'];
                    if (isset($mv['isStatic']) && $mv['isStatic']) {
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


                $fileName = rtrim($fullDir, '/').'/'.$class.'.php';
                $res = self::writeFile($fileName, $content);
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
                if (strtolower($fileName) == strtolower($ext)) {
                    $this->__createDict($ext, $fileName, array_merge($tmp, $v));
                } else {
                    $this->__createDict($ext, $fileName, $v);
                }
            }
        }
    }

    private function __createDict($ext, $fileName, $data)
    {
        $fileFullName = self::DICT_PATH.DS.strtolower($ext).DS.$fileName.'.json';
        return self::writeFile($fileFullName, $data);
    }

    public function updateDict($ext, $data)
    {
        $tmp = $data;
        unset($tmp['classes']);
        $this->__createDict($ext, $ext, $tmp);
        if (!isset($data['classes'])) {
            return;
        }
        foreach($data['classes'] as $k=>$v) {
            $fileName = strtolower(str_replace("\\", "_", $k));
            if (strtolower($fileName) == strtolower($ext)) {
                $this->__createDict($ext, $fileName, array_merge($tmp, $v));
            } else {
                $this->__createDict($ext, $fileName, $v);
            }
        }
    }

    public function getDict($extName)
    {
        $extName = strtolower($extName);
        if (empty(self::$_dicts) || !isset(self::$_dicts[$extName])) {
            $files = scandir(self::DICT_PATH.DS.$extName);
            $arr = array();
            foreach($files as $file) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $content = file_get_contents(self::DICT_PATH.DS.$extName.DS.$file);
                if (!$content ) {
                    echo "the file ".$file."not found\n";
                }
                $tmp = json_decode($content, true);
                if (!$tmp ) {
                    echo "the file ".$file." is not a legal json file\n";
                }
                $arr[str_replace('.json', '', $file)] = $tmp;
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

    public static function inArray($ele, $arr)
    {
        foreach($arr as $value) {
            if (strtolower($ele) == strtolower($value)) {
                return true;
            }
        }
        return false;
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
                $exportData['constants'][$k] = $dict[$extName]['constants'][$k];
            }
        }
        foreach($exportData['ini'] as $k=>$v) {
            if (isset($dict[$extName]['ini'][$k])) {
                $exportData['ini'][$k]['comment'] = $dict[$extName]['ini'][$k]['comment'];
                $exportData['ini'][$k]['options'] = $dict[$extName]['ini'][$k]['options'];
            }
        }

        foreach($exportData['functions'] as $k=>$v) {
            if (isset($dict[$extName]['functions'][$k])) {
                $exportData['functions'][$k] = $dict[$extName]['functions'][$k];
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

            if (empty($v['properties']) && isset($dict[$fileName]['properties'])) {
                $exportData['classes'][$k]['properties'] = $dict[$fileName]['properties'];
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
                if (isset($dict[$fileName]['methods']) ) {
                    $exportData['classes'][$k]['methods'] = $dict[$fileName]['methods'];
                }
            }
        }
        $this->updateDict($extName, $exportData);
        return $exportData;
    }

    public static function getDictFileContent($fileName) {
        $arr = array();
        if (file_exists($fileName)) {
            $content = file_get_contents($fileName);
            $arr = json_decode($content, true);
        }
        return $arr;
    }

    public static function writeFile($fileName, $content) {
        if (!is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }
        return file_put_contents($fileName, $content);
    }
}
