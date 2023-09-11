<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showLoginForm(){
        return view("dashboard.index");
    }
}
