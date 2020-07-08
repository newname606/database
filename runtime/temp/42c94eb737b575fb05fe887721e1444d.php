<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"C:\Users\gaming\Desktop\competition\public/../application/competition\view\news\index.html";i:1592884365;s:96:"C:\Users\gaming\Desktop\competition\public/../application/competition\view\Public\BaseIndex.html";i:1592810671;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">


	<div class="mt-20">
		
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <a href="<?php echo url('save'); ?>"class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加</a>
        </span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
    <table class="table table-border table-bordered table-hover table-bg table-sort">
        <thead>
        <tr>
                        <th>编号</th>
                        <th>标题</th>
                        <th>内容</th>
                        <th>添加时间</th>
                        <th>操作</th>
        </tr>
        </thead>
        <?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
            <tr>
                                <td align="center"><?php echo $row['id']; ?></td>
                                                <td align="center"><?php echo $row['title']; ?></td>
                                                <td align="center"><?php echo $row['content']; ?></td>
                                                <td align="center"><?php echo $row['create_time']; ?></td>
                                
                <td class="td-manage">
                    <a title="编辑" href="<?php echo url('News/save',array('id'=>$row['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i>
                    </a> <a title="删除" href="<?php echo url('News/del',array('id'=>$row['id'])); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
</body>
</html>