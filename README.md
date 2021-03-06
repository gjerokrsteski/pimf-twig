Welcome to PIMF Twig bundle
===========================
This is a run ready "Hello world" application using PIMF micro framework and Twig a flexible, fast, and secure template
engine for PHP (http://twig.sensiolabs.org) brought for us by Symfony framework developers.

Here you can learn how to work with \Pimf\View\Twig template engine and \Pimf\Router.

Installation & Configuration
----------------------------

1. git clone --recursive https://github.com/gjerokrsteski/pimf-twig.git

2. cd pimf-twig/

3. update submodules
```php  
  git submodule --quiet sync
  git submodule --quiet update --force --init --recursive
```

4. php pimf core:init

5. cd Twig/

6. composer install

7. cd ../

8. Navigate to your application in a web browser. If all is well, you should see a pretty PIMF splash page. Get ready - there is lot more to learn!
             
Alternatively you can run the PHP's built-in web server that is provided since PHP 5.4.0

```php   
php -S 127.0.0.1:1337
```

Please notice: this web server was designed to aid application development. It may also be useful for testing purposes or for 
application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. 
It should not be used on a public network.

Learning PIMF
-------------
One of the best ways to learn PIMF is to read through the entirety of its documentation. This guide details all aspects of the framework and how to apply them to your application. https://github.com/gjerokrsteski/pimf/wiki

Read the PIMF Starter book almost anywhere. Available as a PDF, EPUB and MOBI. You can now read it on all devices, as well as offline. https://leanpub.com/pimf-starter/
