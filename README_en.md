
phpDocumentCreator

===============

phpDocumentCreator is a PHP library for generating PHP Extension documents.Because the PHP extension is written in C, so we can not directly view the extended function or extended class library usage, only by looking at the C source code to understand. In order to make up for this limitation, we have listed the PHP constants, functions, class constants, properties, and methods in PHP's reflection class library. However, sometimes reflection libraries do not display complete information, and they are not annotated. You can add annotations to these extension classes via custom data dictionaries, or we can add annotations for these extension classes via existing PHP code


## installation 
    
1、 we can download the source code from github.We can download the source from github. The github repository is https://github.com/shixinke/php-document-creator.   

2、 we can install it with composer

    composer require shixinke/php-document-creator
    
## usage

    
### create php document 
    
    php creator.php extensionName create
    
    for example: create php redis extension: php creator.php redis create
### Other 
    
## Author

author:shixinke(ishixinke@qq.com,ishixinke@gmail.com)

website:[http://www.shixinke.com](http://www.shixinke.com)

    
