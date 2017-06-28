<?php

namespace App\Http\Controllers;

use EasyWeChat\Message\News;
use Illuminate\Http\Request;
use Tory\TopClient\TopClientManager;

class WelcomeController extends Controller
{
    public function index()
    {
        \Debugbar::addMessage('index', 'wechat 2');

        return view('welcome');
    }

    public function test()
    {
        $tbks = new TopClientManager();
        $data = $tbks->search('女装');
        $d;
        foreach ($data as $key => $row) {
            $d[] = [
                new News([
                    'title' => $row->title,
                    'url' => $row->item_url,
                    'image' => $row->pict_url
                ])
            ];
        }
        return $d;
    }
}
