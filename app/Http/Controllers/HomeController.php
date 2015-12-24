<?php

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
     * Show the faq page to the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function faq()
    {
        return Redirect::to('https://docs.cachethq.io/docs/frequently-asked-questions', 301);
    }
}
