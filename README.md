L4-Ongkir
=========

L4-Ongkir is a laravel 4 wrapper package for http://ongkir.info API.

This package is inspired from the package Laravel-4-sis-JNE-owned totox777 which can be downloaded at https://github.com/totox777/Laravel-4-Ongkir-JNE/ 

Due to the package, there are several coding formats that do not fit with the style of my own so I made this package 

Along with the change of the API in ongkir.info, this package will continue I developed in keeping with the format of the API ongkir.info 


Version
----

0.3


Installation
--------------
add this line to your composer.json and update your composer
```sh
{
    "require": {
        "masbenx/ongkir": "*"
    }
}
```
This package is compatible with Laravel 4 (but not limited to). If Laravel is detected, the language library from Laravel will be used instead of an own implementation.

Add the service provider in app/config/app.php:
```sh
'Masbenx\Ongkir\OngkirServiceProvider'
```
Publish the config 
```sh
$ php artisan config:publish masbenx/ongkir
```
##### Config your API-Key in app/config/package/masbenx/ongkir/config.php

```sh
return array(
    'API-Key' => 'your-api-key'
);
```

How To Use
--------------
get courier cost
```sh
$result = Ongkir::getCost('YOGYAKARTA','JAKARTA PUSAT',1);
```


License
----

BSD-2-Clause


