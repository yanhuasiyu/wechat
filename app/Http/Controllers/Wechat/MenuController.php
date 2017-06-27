<?php

namespace App\Http\Controllers\Wechat;

<<<<<<< HEAD
use EasyWeChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
=======
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
>>>>>>> dev

class MenuController extends Controller
{
    protected $menu;

<<<<<<< HEAD
    public function __construct()
    {
        $this->menu = EasyWeChat::menu();
    }
=======
    /**
     * @var Application
     */

    public function __construct(Application $wechat)
    {
        $this->menu = $wechat->menu;
    }

>>>>>>> dev
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $menus = $menus->all();
=======
        $menus = $this->menu->all();
        dump($menus);
>>>>>>> dev
        return $menus;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        $buttons = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key" => "V1001_TODAY_MUSIC"
            ],
            [
                "name" => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url" => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url" => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],
                ],
            ],
        ];
        $this->menu->add($buttons);

        return redirect('wechat/menu', 200);
>>>>>>> dev
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
=======
     * @param  \Illuminate\Http\Request $request
>>>>>>> dev
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> dev
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> dev
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
=======
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
>>>>>>> dev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> dev
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
