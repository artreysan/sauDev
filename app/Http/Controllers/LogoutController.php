<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        auth()->logout();
        
        return redirect()->route('login');
    }
}
