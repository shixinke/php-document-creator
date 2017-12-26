<?php
define('ROOT_PATH', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('DATA_PATH', ROOT_PATH.DS.'data');
define('DICT_PATH', DATA_PATH.DS.'dict');
define('NOTE_PATH', DATA_PATH.DS.'notes');
define('OUTPUT_PATH', DATA_PATH.DS.'output');
require_once ROOT_PATH.'/Autoloader.php';
class Creator {

    private static $_docs = array();

    public static function run($argv) {
        self::init();
        $bin = isset($argv[0]) ? $argv[0] : '';
        $package = isset($argv[1]) ? $argv[1] : '';
        $cmd = isset($argv[2]) ? $argv[2] : '';
        if ($package == '') {
            exit("请选择扩展名\n");
        }
        switch ($cmd) {
            case 'create':
                self::create($package);
                break;
            case 'transform':
                self::transform($package);
                break;
            case 'note':
                self::note($package);
                break;
            default:
                self::help($package, $bin);
        }
    }

    public static function create($package) {
        try {
            $doc = self::getDocument($package);
            $doc->create();
        } catch (Exception $ex) {
            echo "create error:\n".$ex->getMessage();
        }

    }

    public static function transform($package) {
        try {
            $doc = self::getDocument($package);
            $path = NOTE_PATH.DS.$package;
            $fileName = NOTE_PATH.DS.$package.'.php';
            if (is_dir($path)) {
                $fileName = $path;
            }
            $transform = new \phpDocumentCreator\Transform($fileName);
            $data = $transform->info('X', "_");
            $doc->updateDict('swoole', $data);
            self::create($package);
        } catch (Exception $ex) {
            echo "create error:\n".$ex->getMessage();
        }
    }

    public static function note($package) {
        $fileName = NOTE_PATH.DS.$package.DS.'swoole_async.php';
        require_once($fileName);
        $data = \phpDocumentCreator\Tool::export('swooleX', true);
        var_dump($data);
    }

    public static function getDocument($package) {
        if (isset(self::$_docs[$package])) {
            return self::$_docs[$package];
        }
        self::$_docs[$package] = new \phpDocumentCreator\Document($package);
        return self::$_docs[$package];
    }

    public static function help($package, $bin) {
        echo "Usage: ".$bin." ".$package." create | transform \n";
    }

    public static function init() {
        if (!file_exists(DATA_PATH)) {
            mkdir(DATA_PATH);
        }
        if (!file_exists(DICT_PATH)) {
            mkdir(DICT_PATH);
        }
        if (!file_exists(NOTE_PATH)) {
            mkdir(NOTE_PATH);
        }
        if (!file_exists(OUTPUT_PATH)) {
            mkdir(OUTPUT_PATH);
        }
    }
}

Creator::run($argv);