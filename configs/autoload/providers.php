<?php

/*
// This file is a part of K-MVC
// version: 1.1.0
// author: MrKen
// website: https://vdevs.net
// github: https://github.com/buihanh2304/simple-php-mvc-framework
// docs: https://github.com/buihanh2304/simple-php-mvc-framework/wiki
*/

use App\Providers\RouteServiceProvider;
use System\Providers\AppServiceProvider;
use System\Providers\CaptchaServiceProvider;

return [
    AppServiceProvider::class,
    RouteServiceProvider::class,
    CaptchaServiceProvider::class,
];
