<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // User Dashboard

    public function userDashboard(){
        return view('user.user_dashboard');
    }
}
