<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $request;
    protected $view;
    protected $route;

    public function __construct()
    {
        $this->middleware('auth');
        $this->route = '';
        $this->view  = '.dashboard';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $title  = 'Dashboard Panel';
        return view($this->view . '.home', compact('title'));
    }
}
