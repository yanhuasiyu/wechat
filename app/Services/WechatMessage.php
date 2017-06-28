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
        \Log::info('消息',$message);
        return 'text message: '.$message;
        if (mb_substr($this->message->content, 0, 1, 'utf-8') == '买')
            return '买东西';
        else
            return $this->message->content;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}