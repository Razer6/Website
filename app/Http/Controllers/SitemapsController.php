<?php

/*
 * This file is part of Cachet Website.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Website\Http\Controllers;

use Watson\Sitemap\Facades\Sitemap;

class SitemapsController extends Controller
{
    public function index()
    {
        Sitemap::addTag(route('site.home'), null, 'monthly', '1.0');
        Sitemap::addTag(route('site.team'), null, 'monthly', '1.0');

        return Sitemap::render();
    }
}
