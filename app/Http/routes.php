<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as'   => 'site.home',
    'uses' => 'HomeController@index',
]);

Route::get('team', [
    'as'   => 'site.team',
    'uses' => 'HomeController@team',
]);

Route::get('faq', [
    'as'   => 'site.faq',
    'uses' => 'HomeController@faq',
]);

Route::get('sitemap.xml', 'SitemapsController@index');
