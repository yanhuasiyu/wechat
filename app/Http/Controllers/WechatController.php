<?php

namespace App\Http\Controllers;

use App\Services\WechatMessage;
use EasyWeChat;
use EasyWeChat\Message\News;


class WechatController extends Controller
{
    protected $msg;
    public function serve()
    {
        $server = EasyWeChat::server();
        $userapi = EasyWeChat::user();
        $server->setMessageHandler(
        /**
         * @param $message
         * @return string
         */
            function ($message) use ($userapi) {
                $this->msg = new WechatMessage($message);
                switch ($message->MsgType) {
                    case 'event':
                        return $this->msg->event();
                        break;
                    case 'text':
                        return $this->msg->text();
                        break;
                    case 'image':
                        $news = new News([
                            'title' => '图文标题',
                            'description' => '文章描述就在这里，看看吧',
                            'url' => 'http://wechat.gczycn.com',
                            'image' => $message->PicUrl,
                        ]);
                        $news2 = new News([
                            'title' => '图文标题2',
                            'description' => '文章2描述就在这里，看看吧',
                            'url' => 'http://www.gczycn.com',
                            'image' => $message->PicUrl,
                        ]);
                        return [$news, $news2];
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
