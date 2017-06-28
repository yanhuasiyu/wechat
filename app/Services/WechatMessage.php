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
            return mb_substr($message,1,mb_strlen($message),'utf-8');
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