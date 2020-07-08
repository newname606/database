<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    /*验证*/
    public function login($data)
    {
        $name = $data['username'];
        $password = $data['password'];
        $result = db("admin")->field('id,password,username')->where('username', '=', $name)->find();
        $id = $result['id'];
        //验证,验证码
        if (!captcha_check($data['captcha'])) {
            return 0;
        }
        //验证密码和账号
        if (!empty($result)) {
            if ($result['password'] == $password) {
                session('uname',$name);
                return $id;
            } else {
                return -2;//密码
            }
        } else {
            return -1;//账号错误
        }
    }
}