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

use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the website homepage to the user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the team page to the user.
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        return view('team');
    }

    /**
     * Shows the press page.
     *
     * @return \Illuminate\View\View
     */
    public function press()
    {
        return view('press');
    }

    /**
     * Show the faq page to the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function faq()
    {
        return Redirect::to('https://docs.cachethq.io/docs/frequently-asked-questions', 301);
    }
}
