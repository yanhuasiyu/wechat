<?php
/**
 * Created by PhpStorm.
 * User: Tory
 * Date: 2017/6/16
 * Time: 17:41
 */

namespace Tory\TopClient;

use TopClient\TopClient;
use TopClient\Request\TbkItemGetRequest;

class TopClientManager
{
    protected $appkey;
    protected $c;
    protected $req;
    public $response;

    public function __construct()
    {
        if (!defined("TOP_SDK_WORK_DIR")) {
            define("TOP_SDK_WORK_DIR", "/tmp/");
        }

        /**
         * 是否处于开发模式
         * 在你自己电脑上开发程序的时候千万不要设为false，以免缓存造成你的代码修改了不生效
         * 部署到生产环境正式运营后，如果性能压力大，可以把此常量设定为false，能提高运行速度（对应的代价就是你下次升级程序时要清一下缓存）
         */
        if (!defined("TOP_SDK_DEV_MODE")) {
            define("TOP_SDK_DEV_MODE", true);
        }

        if (!defined("TOP_AUTOLOADER_PATH")) {
            define("TOP_AUTOLOADER_PATH", dirname(__FILE__));
        }
        $this->c = new TopClient();
        $this->c->appkey = config('topclient.connections.app.app_key');
        $this->c->secretKey = config('topclient.connections.app.app_secret');
        $this->c->format = config('topclient.connections.app.format');
    }

    public function execute($req)
    {
        $this->response = $this->c->execute($req);
        return $this;
    }

    public function get()
    {
        return $this->response;
    }

    public function toarray()
    {
        return $this->response->results->n_tbk_item;
    }

    public function search($q)
    {
        $req = new TbkItemGetRequest;
        $req->setFields("num_iid,click_url,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
        $req->setQ($q);
        $req->setSort("tk_total_sales");
        $req->setPageSize("5");
        $resp = $this->c->execute($req)->results->n_tbk_item;

        return $resp;
    }

}