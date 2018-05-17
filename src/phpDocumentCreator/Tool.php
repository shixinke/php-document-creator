<?php
namespace phpDocumentCreator;
use \ReflectionExtension as ReflectionExtension;
use \ReflectionClass as ReflectionClass;
/**
 * Class Tool
 *
 * 利用反射获取扩展或其他类库的信息的工具库
 */
class Tool
{
    /**
     * 获取扩展的常量
     * @param ReflectionExtension $reflection
     * @return array
     */
    public static function getConstants(ReflectionExtension $reflection)
    {
        $constants = $reflection->getConstants();
        $arr = array();
        foreach($constants as $k=>$v)
        {
            $arr[$k] = array(
                'value'=>$v,
                'comment'=>''
            );
        }
        return $arr;
    }

    /**
     * 获取自定义类库的常量
     * @param $prefix
     * @return array
     */
    public static function getLocalConstants($prefix)
    {
        $constants = get_defined_constants();
        $arr = array();
        $prefix = strtoupper($prefix);
        foreach($constants as $constant=>$v) {
            if (stripos($constant, $prefix.'_') === 0) {
                $arr[$constant] = array(
                    'value'=>$v,
                    'comment'=>''
                );
            }
        }
        return $arr;
    }

    public static function getIniEntries(ReflectionExtension $reflection)
    {
        $entries = $reflection->getINIEntries();
        $arr = array();
        foreach($entries as $key=>$value) {
            $arr[$key] = array(
                'value'=>$value,
                'options'=>array(),
                'comment'=>''
            );
        }
        return $arr;
    }

    public static function getFunctions(ReflectionExtension $reflection)
    {
        $functions = $reflection->getFunctions();
        $arr = array();
        foreach($functions as $func) {
            $name = $func->getName();
            $arr[$name]['comment'] = $func->getDocComment();
            $arr[$name]['parameters'] = array();
            $arr[$name]['return'] = '';
            $arr[$name]['example'] = '';
            $params = $func->getParameters();
            foreach($params as $param) {
                $paramName = $param->getName();
                if ($paramName == "") {
                    continue;
                }
                $type = '';
                if ($param->hasType()) {
                    $type = $param->getType();
                }
                $defaultValue = null;
                if ($param->isDefaultValueAvailable()) {
                    $defaultValue = $param->getDefaultValue();
                }

                $arr[$name]['parameters'][$paramName] = array(
                    'comment'=>'',
                    'options'=>array(),
                    'type'=>$type,
                    'value'=>$defaultValue
                );
            }
        }
        return $arr;
    }

    public static function getClassNames(ReflectionExtension $reflection)
    {
        $classNames = $reflection->getClasses();
        $arr = array();
        foreach($classNames as $className) {
            $name = $className->getName();
            $arr[$name]['object'] = $className;
            $arr[$name]['comment'] = $className->getDocComment();
            $arr[$name]['namespace'] = $className->getNamespaceName();
            $parentClass = $className->getParentClass();
            if ($parentClass) {
                $arr[$name]['extends'] = $parentClass->getName();
            }
            if ($className->isAbstract()) {
                $arr[$name]['isAbstract'] = 1;
            }
            if ($className->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($className->isInterface()) {
                $arr[$name]['isInterface'] = 1;
            }
        }
        return $arr;
    }

    public static function getLocalFunctions($prefix = '', $strict = false)
    {
        $functions = get_defined_functions();
        $arr = array();
        $targets = $strict ? array_merge($functions['internal'], $functions['user']) : $functions['user'];
        foreach($targets as $function) {
            $matched = $strict ? $function == $prefix : stripos($function, $prefix.'_') === 0;
            if ($matched) {
                $func = new \ReflectionFunction($function);
                $name = $function;
                $arr[$name]['comment'] = $func->getDocComment();
                $arr[$name]['parameters'] = array();
                $arr[$name]['return'] = '';
                $arr[$name]['example'] = '';
                $params = $func->getParameters();
                foreach($params as $param) {
                    $paramName = $param->getName();
                    $type = 'unknown';
                    if ($param->hasType()) {
                        $type = $param->getType();
                    }

                    $arr[$name]['parameters'][$paramName] = array(
                        'comment'=>'',
                        'options'=>array(),
                        'type'=>$type
                    );
                }
            }

        }
        return $arr;
    }

    public static function getLocalClassNames($prefix = '', $delimiter = '_', $strict = false)
    {
        $classNames = array_unique(get_declared_classes());
        $arr = array();
        foreach($classNames as $className) {
            $matched = $strict ? $className == $prefix : stripos($className, $prefix.$delimiter) === 0;
            if ($matched) {
                $classObj = new \ReflectionClass($className);
                $name = $className;
                $arr[$name]['object'] = $classObj;
                $arr[$name]['comment'] = $classObj->getDocComment();
                $arr[$name]['namespace'] = $classObj->getNamespaceName();
                $parentClass = $classObj->getParentClass();
                if ($parentClass) {
                    $arr[$name]['extends'] = $parentClass->getName();
                }
                if ($classObj->isAbstract()) {
                    $arr[$name]['isAbstract'] = 1;
                }
                if ($classObj->isFinal()) {
                    $arr[$name]['isFinal'] = 1;
                }
                if ($classObj->isInterface()) {
                    $arr[$name]['isInterface'] = 1;
                }
            }

        }
        return $arr;
    }

    public static function getConsts($reflection)
    {
        $arr = array();
        $consts = $reflection->getConstants();
        foreach($consts as $const=>$value) {
            $arr[$const]['comment'] = '';
            $arr[$const]['type'] = 'unknown';
            $arr[$const]['value'] = $value;
        }
        return $arr;
    }

    public static function getProperties($reflection)
    {
        $arr = array();
        $properties =  $reflection->getProperties();
        $defaultProperties = $reflection->getDefaultProperties();
        foreach($properties as $property) {
            $name = $property->getName();
            if($property->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if($property->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            $arr[$name]['type'] = 'unknown';
            $arr[$name]['comment'] = $property->getDocComment();
            $arr[$name]['isStatic'] = $property->isStatic();
            if (isset($defaultProperties[$name])) {
                $arr[$name]['value'] = $defaultProperties[$name];
            } else {
                if ($arr[$name]['isStatic'] && $property->isPublic()) {
                    $arr[$name]['value'] = $property->getValue();
                }
            }
        }
        return $arr;
    }

    public static function getMethods($reflection)
    {
        $methods =  $reflection->getMethods();
        $arr = array();
        foreach($methods as $method) {
            $name = $method->getName();
            if($method->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if($method->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            if ($method->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($method->isAbstract()) {
                $arr[$name]['isAbstract'] = 1;
            }
            $arr[$name]['comment'] = $method->getDocComment();
            $arr[$name]['isStatic'] = $method->isStatic();
            $arr[$name]['return'] = '';
            $arr[$name]['example'] = '';
            $params = $method->getParameters();
            $arr[$name]['parameters'] = array();
            foreach($params as $param) {
                $paramName = $param->getName();
                if ($paramName == "") {
                    continue;
                }
                $type = 'unknown';
                if ($param->hasType()) {
                    $type = $param->getType();
                } else {
                    if ($param->isArray()) {
                        $type = 'array';
                    } else if($param->isCallable()) {
                        $type = 'callable';
                    }
                }
                $arr[$name]['parameters'][$paramName]['comment'] = '';
                $arr[$name]['parameters'][$paramName]['type'] = $type;
                $arr[$name]['parameters'][$paramName]['options'] = array();
                if ($param->isDefaultValueAvailable()) {
                    $arr[$name]['parameters'][$paramName]['value'] = $param->getDefaultValue();
                }
            }
        }
        return $arr;
    }

    public static function createDir($baseDir, $namespace = false)
    {

        $fullDir = rtrim($baseDir, '/');
        if (!is_dir($fullDir)) {
            mkdir($baseDir);
        }
        if (!$namespace || $namespace == '') {
            return $fullDir;
        }
        $arr = explode("\\", $namespace);
        foreach($arr as $dir) {
            $fullDir .= '/'.$dir;
            if (!is_dir($fullDir)) {
                mkdir($fullDir);
            }
        }
        return $fullDir;
    }

    public static function export($prefix, $isLocal = false, $delimiter = '_')
    {
        $data = array();
        if ($isLocal) {
            $constName = strtoupper($prefix).'_VERSION';
            $data['comment'] = '';
            $data['constants'] = self::getLocalConstants($prefix);
            $data['version'] = isset($data['constants'][$constName]) ? $data['constants'][$constName]['value'] : '';
            $data['ini'] = array();
            $data['functions'] = self::getLocalFunctions($prefix);
            $data['classes'] = array();
            $classNames = self::getLocalClassNames($prefix, $delimiter);
        } else {
            $upper = strtoupper($prefix);
            $ext = new \ReflectionExtension($upper);
            $data['version'] = $ext->getVersion();
            $data['comment'] = '';
            $data['constants'] = self::getConstants($ext);
            $data['ini'] = self::getIniEntries($ext);
            $data['functions'] = self::getFunctions($ext);
            $data['classes'] = array();
            $classNames = self::getClassNames($ext);
        }

        foreach($classNames as $k=>$className) {
            $data['classes'][$k] = $className;
            $data['classes'][$k]['consts'] = self::getConsts($className['object']);
            $data['classes'][$k]['properties'] = self::getProperties($className['object']);
            $data['classes'][$k]['methods'] = self::getMethods($className['object']);
        }
        return $data;
    }

    public static function getAliasName($alias) {
        $aliasNames = array();
        if (is_string($alias)) {
            $alias = array($alias);
        }
        foreach($alias as $row) {
            $tmp = new \ReflectionClass($row);
            $aliasNames[$row] = $tmp->getName();
        }
        return $aliasNames;
    }




}
