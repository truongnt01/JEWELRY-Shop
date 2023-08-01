<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class HomeController extends Controllers
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client');
    }
}
