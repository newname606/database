<?php
/**
 * Created by PhpStorm.
 * User: REN
 * Date: 2020/6/22
 * Time: 14:35
 */

namespace app\competition\controller;


use think\Controller;

class Base extends Controller
{
    protected $title;
    protected $controller_name;
    public $model;

    public function index()
    {
        $rows = model($this->controller_name)->select();
        $count = model($this->controller_name)->count();

        $this->assign([
            'count'=>$count,
            'rows' => $rows
            ]);
        $this->__index_data();
        return $this->fetch();
    }

    public function save($id = '')
    {
        if (request()->isPost()) {
            $data = input('post.');
            //添加时间
            $data['create_time'] = time();
            //验证传过来的数据是否有密码字段没有就跳过
            if (input('post.password') !== null) {
                if ($data['password'] !== $data['password2']) {
                    $this->error("两次密码不一致,请重新输入", url('save'));
                } else {
                    unset($data['password2']);
                }
            }
            //添加和修改
            if (empty($id)) {
                unset($data['id']);
                $result = model($this->controller_name)->allowField(true)->insert($data);
            } else {
                $result = model($this->controller_name)->update($data);
            }
            if ($result) {
                $this->success("编辑成功", url('index'));
                exit;
            } else {
                $this->error("编辑失败", url('save'));
                exit;
            }
        }
        $this->__save_data();
        if (!empty($id)) {
            $row = model($this->controller_name)->find($id);
            $this->assign('row', $row);
        }
        return $this->fetch();
    }

    protected function __index_data(){}
    protected function __save_data(){}

    public function del($id)
    {
        $result = model($this->controller_name)->where(['id' => $id])->delete();
        if ($result) {
            $this->success("删除成功", url('Index'));
        } else {
            //return json(array('status'=>0,'msg'=>'删除失败'));exit;//删除失败
        }
    }
}