<?php

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
