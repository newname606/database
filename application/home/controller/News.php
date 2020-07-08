<?php
/**
 * Created by PhpStorm.
 * User: gaming
 * Date: 2020/6/22
 * Time: 12:05
 */

namespace app\home\controller;
use think\Controller;

class News extends Controller
{
    function _initialize()
    {
        $this->assign('nav','3');
    }

    /*首页*/
    public function index(){
        $list = db("News")->paginate(5);
        $page = $list->render();
        $this->assign([
            "list"=>$list,
            "page"=>$page,
        ]);
        return $this->fetch();
    }

    /*内容页*/
    public function content($id){
        $list = db("News")->where('id','=',$id)->find();
        $this->assign("list",$list);
        return $this->fetch();
    }

}