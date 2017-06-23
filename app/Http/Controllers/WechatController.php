<?php

namespace App\Http\Controllers;

use EasyWeChat;

class WechatController extends Controller
{
    public function serve()
    {
        $server = EasyWeChat::server();

        return $server->serve();
    }
}
