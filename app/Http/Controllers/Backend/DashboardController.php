<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function admin(){
        echo 'welcome to admin';
        //add admin view files
    }
    public function scout(){
        echo 'welcome to scout';
        //add executive view files
    }
    public function teammanager(){
        echo 'welcome to team view';
        //add user view files
    }
    public function player(){
        echo 'welcome to players view';
        //add user view files
    }
}
