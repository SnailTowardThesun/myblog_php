# myblog_php
[![CircleCI](https://circleci.com/gh/SnailTowardThesun/myblog_php/tree/master.svg?style=shield&circle-token=823f8c2f4556a154d5a095b6156418170a2b30e1)](https://circleci.com/gh/SnailTowardThesun/myblog_php/tree/master)

personal blog using php

## Third party

* [bootstrap 3.3.7](https://github.com/twbs/bootstrap)
* [jquery](https://jquery.com)
* [anjularjs 1.6](https://angularjs.org)
* [composer](https://getcomposer.org)
* [twig](http://twig.sensiolabs.org)
* [parsedown](http://parsedown.org)

## configure file

need a configure file named blog.conf to record some information such as user name and password for database

```
{
    "database_username" : "username",
    "database_password" : "password"
}
```

## setup

### ubuntu
1. setup php
  ```
  sudo apt-get update
  sudo apt-get install php7.0 php7.0-fpm php7.0-mysql -y
  ```

1. setup nginx
  ```
  sudo apt-get install nginx
  ```

1. initialize the environment
  ```
  cd trunk && sh configure
  ```
