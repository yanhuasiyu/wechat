<?php

namespace App\Http\Controllers;

use Debugbar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        Debugbar::addMessage('index', 'wechat 2');
        return view('welcome');
    }
}
