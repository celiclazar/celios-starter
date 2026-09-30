<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Core CMS routes (Blog, Forms, Newsletter, Documents, Sitemap, CMS Pages)
| are automatically registered by the Celios Core package.
| Add your custom client application routes below.
|
*/

Route::get('/', function () {
    return view('welcome');
});
