<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home',['page'=>'dashboard','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> []]);
    }
}
