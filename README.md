phpDocumentCreator

===============

[english document](https://github.com/shixinke/php-document-creator/blob/master/README_en.md)

phpDocumentCreator是一个用于生成PHP扩展文档的类库.因为PHP的扩展是使用C语言编写的，所以我们没办法直接查看扩展函数或扩展类库的用法，只能通过查看C源码来了解。我们通过PHP的反射类库列出某个PHP扩展的常量、函数、类常量、属性和方法，然而有时反射类库不能显示完整的信息，而且这些类库没有注释，所以为了弥补这个缺陷，我们可以通过自定义的数据字典为这些扩展类库添加注释，或者我们通过已有PHP代码为这些扩展类库添加注释

## 安装
    
1、 通过从github上clone代码


    git clone https://github.com/shixinke/php-document-creator
    

2、 通过composer安装

  
    composer require shixinke/php-document-creator
    
    
## 基本用法

    
### create php document 生成PHP文档

   usage : php creator.php extensionName create
    
    php creator.php swoole create
 


### 创建字典

    require_once '../Autoloader.php';
    //Redis为扩展的名称
    $doc = new \documentCreator\Document('Redis');
    $doc->createDict();
    
    cd tests
    php docTest.php
    
     
### 其他说明
    
#### 字典

包含PHP扩展的函数、常量和类常量、属性和方法的说明(主要是类型说明，参数说明和注释)

这里自带了yaf,swoole,redis这三个扩展的字典

#### 备注(PHP源代码)

带有注释的PHP源码，目前这里列举了yaf,swoole,redis等三个扩展的注释文件

#### 输出(最终的PHP文档)

如果想使用已经生成好的文档，请查看[phpstrom框架助手](https://github.com/shixinke/phpstorm-for-php-framework)

如果有好的注释文件请push给我


## Author

author:shixinke(ishixinke@qq.com,ishixinke@gmail.com)

website:[http://www.shixinke.com](http://www.shixinke.com)

    
