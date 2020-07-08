<?php
/**
 * Created by PhpStorm.
 * User: gaming
 * Date: 2020/6/22
 * Time: 13:41
 */

namespace app\home\controller;


use think\Controller;
use think\Session;

class User extends Controller
{
    function _initialize()
    {
        $this->assign('nav','1');
    }

    /*参赛报名*/
    public function index(){
        return $this->fetch();
    }

    /*提交数据入库*/
    public function sign(){
        $data = input('post.');
        $username = $data['username'];
        $res = db("User")->where('username','=',$username)->find();
        if($res){
            return json(['status'=>-1]);
        }
        /*入库*/
        $name = session('username');
        $project = $data['project'];
        $list = db("User")->where('project','=',$project)->find();
        $id = $list['id'];
        $data['create_time']=time();
        $time = date('Ymd',time());
        $data['u_id'] = $time.rand(100,999).$id;
        if(db('project')->insert($data) != false){
            return json(['status'=>1,'uid'=>$data['u_id']]);/*入库成功*/
        }else{
            return json(['status'=>0]);/*入库失败*/
        }
    }

    /*注册*/
    public function reg(){
        $data = input('post.');
        $code = $data['code'];
        $data['create_time']=time();
        unset($data['code']);
        $tel = $data['tel'];
        $username = $data['username'];
        $res = db("User")->where('username','=',$username)->find();
        if($res){
            return json(array('code'=>-1,'msg'=>'用户名已存在'));
        }
        $result = db("User")->where('tel','=',$tel)->find();
        if ($result){
            return json(array('code'=>-2,'msg'=>'手机号已存在'));
        }

        if (!captcha_check($code)){
            return json(array('code'=>-3,'msg'=>"验证码错误"));
        }
        if(db("user")->insert($data)!=false){
            return json(array('code'=>1,'msg'=>'注册成功,可以登录了'));
        }
    }

    public function login(){
        $data = input('post.');
        $username = $data['username'];
        $password = $data['password'];
        $res = db("User")->where('username','=',$username)->whereOr('tel','=',$username)->find();
        if($res){
            if($res['password'] == $password){
                session('username',$res['username']);
                session('tel',$res['tel']);
                return json(array('code'=>1,'msg'=>'登录成功'));
            }
        }else{
            return json(array('code'=>-1,'msg'=>'用户名或者手机号错误'));
        }
    }

    /*找回密码*/
    public function find(){
        $data = input();
        $code = session('code');
        $capt = $data['code'];
        if($code != $capt){
            return json(-1);
        }
        $tel = $data['tel'];
        $res = db("User")->where('tel','=',$tel)->find();
        /*查询到了返回状态*/
        if ($res){
            return json(1);
        }else{
            return json(0);
        }
    }

    /*重置密码*/
    public function reset(){
        $data = input('post.');
        $tel = $data['tel'];
        $password = $data['password'];
        $res = db("User")->where('tel','=',$tel)->update(['password'=>$password]);
        if($res != false){
            return json(1);
        }else{
          return json(0);
        }
    }

    /*查看报名信息*/
    public function serch(){
        $tel = session('tel');
        $lists = db("project")->alias('a')
            ->field('a.*,b.name as s_name')
            ->join('status b','a.status=b.id')
            ->where('a.tel','=',$tel)->select();

        $this->assign("lists",$lists);
        return $this->fetch();
    }

    public function logout(){
        session('username',null);
        $this->success("退出成功",url("Index/index"));exit;
    }
}
