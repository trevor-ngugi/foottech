<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('indexx',[
            'message'=>'welcome to my blog'
        ]);
    }
    //
}
