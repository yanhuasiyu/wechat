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
    protected $message;

    public function __construct($message)
    {
        $this->message=$message;
    }

    public function event()
    {
        return  '收到事件消息';
    }

    public function text()
    {
        return  '文本消息';
    }
}