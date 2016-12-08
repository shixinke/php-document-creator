phpDocumentCreator

===============

phpDocumentCreator is a PHP library for generating PHP Extension documents.Because the PHP extension is written in C, so we can not directly view the extended function or extended class library usage, only by looking at the C source code to understand. In order to make up for this limitation, we have listed the PHP constants, functions, class constants, properties, and methods in PHP's reflection class library. However, sometimes reflection libraries do not display complete information, and they are not annotated. You can add annotations to these extension classes via custom data dictionaries, or we can add annotations for these extension classes via existing PHP code

phpDocumentCreator是一个用于生成PHP扩展文档的类库.因为PHP的扩展是使用C语言编写的，所以我们没办法直接查看扩展函数或扩展类库的用法，只能通过查看C源码来了解。我们通过PHP的反射类库列出某个PHP扩展的常量、函数、类常量、属性和方法，然而有时反射类库不能显示完整的信息，而且这些类库没有注释，所以为了弥补这个缺陷，我们可以通过自定义的数据字典为这些扩展类库添加注释，或者我们通过已有PHP代码为这些扩展类库添加注释

##installation 安装

1、 we can install the library with composer.我们可以通过composer来安装这个类库

    composer install shixinke/phpDocumentCreator
    
2、 we can download the source code from github.We can download the source from github. The github repository is https://github.com/shixinke/phpDocumentCreator. 当然我们也可以通过从github上下载源码来安装   

##usage 基本用法


There are some  examples in the tests folder.(tests/docTest.php)

### create document dictionary 创建字典

    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $doc->createDict();
    
### create php document 生成PHP文档
    
    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $doc->create();
    
### create php document from other php source code 通过PHP源码生成文档
    
    require_once '../Autoloader.php';
    $doc = new \documentCreator\Document('Redis');
    $transform = new \documentCreator\Transform('./notes/redis.php');
    $doc->updateDict('redis', $transform->info());
    $doc->create();
    
### Other 其他说明
    
#### Dictionary 字典

包含PHP扩展的函数、常量和类常量、属性和方法的说明(主要是类型说明，参数说明和注释)

#### PHP Notes 备注(PHP源代码)

#### output 输出(最终的PHP文档)
    