<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
}

