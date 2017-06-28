<?php

namespace App\Http\Controllers;

use Debugbar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        Debugbar::addMessage('index', 'wechat 2');
=======
        \Debugbar::addMessage('index', 'wechat 2');
>>>>>>> e84f1e2... return nickname
        return view('welcome');
    }
}
