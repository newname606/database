<?php
namespace app\competition\controller;

use think\Controller;

class Index extends Controller
{
    function _initialize()
    {
        if(session('uname') == null){
            $this->error('请先登录',url("Login/index"));exit;
        }
    }

    /*首页*/
    public function index(){
        return $this->fetch();
    }

    /*欢迎*/
    public function welcome(){
        return $this->fetch();
    }

    /*退出登录*/
    public function logout(){
        session('uname',null);
        $this->success("退出成功",url('Login/index'));exit();
    }

    /*切换用户*/
    public function change(){
        session('uname',null);
        $this->success("切换成功",url('Login/index'));exit();
    }
}
