<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the guarantees page
     *
     * @return \Illuminate\View\View
     */
    public function guarantees()
    {
        return view('pages.guarantees');
    }

    /**
     * Show the cooperation page
     *
     * @return \Illuminate\View\View
     */
    public function cooperation()
    {
        return view('pages.cooperation');
    }

    /**
     * Show the contacts page
     *
     * @return \Illuminate\View\View
     */
    public function contacts()
    {
        return view('pages.contacts');
    }
}
