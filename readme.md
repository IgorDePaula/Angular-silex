Angular Silex
=============

A basic example of [angular.js](http://www.angularjs.org) with [Silex](http://silex.sensiolabs.org/) and [Docrine](http://www.doctrine-project.org/).

Install the app with [Composer](http://getcomposer.org) and [Bower](http://www.bower.io) and start it:

```
php -S 0.0.0.0:8080 -t public
```

Table for test:
```
CREATE TABLE `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`ativo` int(1) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```