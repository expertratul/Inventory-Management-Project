<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seleController extends Controller
{
    public function selePage(){
        return view('pages.dashboard.sele-page');
    }
}
