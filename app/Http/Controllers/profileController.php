<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function userProfilePage(){
        return view('pages.dashboard.profile-page');
    }
}
