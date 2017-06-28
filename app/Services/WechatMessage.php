<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2017/6/27
 * Time: 22:17
 */

namespace App\Services;


class WechatMessage
{
//    protected $message;
//
//    public function __construct($message)
//    {
//        $this->message = $message;
//    }

    public function event()
    {
        return '收到事件消息';
    }

    public function text($message)
    {

        $str = mb_substr($message, 0, 1, 'utf-8');
        dump($str) ;
        if ($str == '买')
        {
            $news = new News([
                'title' => '图文标题',
                'description' => '文章描述就在这里，看看吧',
                'url' => 'http://wechat.gczycn.com',
                'image' => 'http://p5.qhimg.com/t01cb13ada81d04d519.jpg',
            ]);
            $news2 = new News([
                'title' => '图文标题2',
                'description' => '文章2描述就在这里，看看吧',
                'url' => 'http://www.gczycn.com',
                'image' => 'http://p4.qhimg.com/dmfd/__90/t01ae059c4f323275eb.jpg?size=640x960',
            ]);
            return [$news, $news2];
        }

//            return mb_substr($message,1,mb_strlen($message),'utf-8');
        else
            return $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}