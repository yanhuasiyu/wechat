<?php

namespace App\Http\Controllers;

use EasyWeChat;
use EasyWeChat\Message\News;


class WechatController extends Controller
{
    public function serve()
    {
        $server = EasyWeChat::server();
        $userapi = EasyWeChat::user();
        $server->setMessageHandler(/**
         * @param $message
         * @return string
         */
            function ($message) use ($userapi){
            switch ($message->MsgType) {
                case 'event':
                    return '收到事件消息 ';
                    break;
                case 'text':
                    \Debugbar::info($message);
                    return '收到文字消息'.$userapi->get($message->FromUserName)->nickname;
                    break;
                case 'image':
                    $news = new News(['titlle'=>'图文标题',
                        'description'=>'文章描述就在这里，看看吧',
                        'url' => 'http://wechat.gczycn.com',
                        'imgage' => $message->PicUrl,
                    ]);
                    return $news;
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
            // ...
        });

        return $server->serve();
    }
}
