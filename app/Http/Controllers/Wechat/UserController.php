<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat;

class UserController extends Controller
{
    protected $userService;

    public function __construct()
    {
       $this->userService = EasyWechat::user();
    }
    public function index()
    {
        
        $users = $this->userService->lists();

        return $users;
    }

    public function show($id)
    {
        $user = $this->userService->get($id);

        return $user;
    }
}
