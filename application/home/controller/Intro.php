<?php
/**
 * Created by PhpStorm.
 * User: gaming
 * Date: 2020/6/22
 * Time: 12:03
 */

namespace app\home\controller;
use think\Controller;

class Intro extends Controller
{

    function _initialize()
    {
        $this->assign('nav','2');
    }

    public function index(){
        return $this->fetch();
    }

    /*评审标准*/
    public function standard(){
        return $this->fetch();
    }

    /*奖励政策*/
    public function reward(){
        return $this->fetch();
    }

    /*赛事安排*/
    public function arrange(){
        return $this->fetch();
    }

    /*大赛组织*/
    public function org(){
        return $this->fetch();
    }

}