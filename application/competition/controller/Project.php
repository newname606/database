<?php

namespace app\competition\controller;

class Project extends Base{
    protected  $title = '项目报名表';
    protected  $controller_name = "Project";

    protected function __index_data()
    {
       $rows = db("Project")->alias('a')
           ->field('a.*,b.name as s_name')
           ->join('status b','a.status=b.id')
           ->select();
       $this->assign('rows',$rows);
    }

    protected function __save_data()
    {
        $status = db("status")->select();
        $this->assign('status',$status);
    }
}

