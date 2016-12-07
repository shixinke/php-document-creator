phpDocumentCreator

===============

phpDocumentCreator is a PHP library for generating PHP Extension documents

phpDocumentCreator是一个用于生成PHP扩展文档的类库

##installation

    composer install shixinke/phpDocumentCreator

##usage

### create document dictionary

    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $doc->createDict();
    
### create php document
    
    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $doc->create();
    
### create php document from other php source code
    
    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $transform = new \documentCreator\Transform('./notes/redis.php');
    $doc->updateDict('redis', $transform->info());
    $doc->create();

    