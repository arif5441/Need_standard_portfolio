<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view(view: 'backend.dashboard.index');
    }
    public function login()
    {
        return view(view: 'backend.login.index');
    }
    
}
