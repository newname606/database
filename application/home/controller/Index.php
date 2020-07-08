<?php
namespace app\home\controller;
use think\Controller;
class Index extends Controller
{
    function _initialize()
    {
       $this->assign('nav','1');
    }

    /*大赛首页*/
    public function index()
    {
        return $this->fetch();
    }
}
