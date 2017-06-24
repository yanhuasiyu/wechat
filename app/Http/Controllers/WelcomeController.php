<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        \Debugbar::addMessage('index', 'wechat');
        return view('welcome');
    }
}
