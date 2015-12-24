<?php

/*
 * This file is part of Cachet Website.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
