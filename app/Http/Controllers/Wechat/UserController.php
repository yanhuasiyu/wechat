<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat;

class UserController extends Controller
{
    public function index()
    {
        $userService = EasyWechat::user();
        
        $users = $userService->lists();

        return $users;


    }
}
