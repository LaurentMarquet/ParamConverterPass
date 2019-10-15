# ParamConverterPass
Symfony project to reproduce a test that works, to be used with [ParamConverterFail](https://github.com/LaurentMarquet/ParamConverterFail)

Project made with the following

```
composer create-project symfony/website-skeleton ParamConverterPass;

php bin/console make:entity;

php bin/console make:migration;

php bin/console doctrine:migrations:migrate;

#Added record with SQL `INSERT INTO players VALUES (1);`

php bin/console make:controller;

#Added Route display

#Added tests

php bin/phpunit;
```