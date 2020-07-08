<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/www/web/189556_com/public_html/application/competition/view/project/save.html";i:1593386412;s:81:"/www/web/189556_com/public_html/application/competition/view/public/Basesave.html";i:1593348052;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/public/static/admin/favicon.ico" >
<link rel="Shortcut Icon" href="/public/static/admin/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/public/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/public/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加用户 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	
<form action="<?php echo url('Project/save'); ?>" method="post" class="form form-horizontal" id="form-member-add">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>单位名称：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo !empty($row['username'])?$row['username'] : ''; ?>" placeholder="" id="username" name="username">
        </div>
    </div>

    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>联系人：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo !empty($row['contacts'])?$row['contacts'] : ''; ?>" placeholder="" id="contacts" name="contacts">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>项目名称：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo !empty($row['project'])?$row['project'] : ''; ?>" placeholder="" id="project" name="project">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>开展项目名称：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo !empty($row['content'])?$row['content'] : ''; ?>" placeholder="" id="content" name="content">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>联系电话：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo !empty($row['tel'])?$row['tel'] : ''; ?>" placeholder="" id="tel" name="tel">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>项目状态：</label>
        <select name="status" class="formControls col-xs-8 col-sm-9">
            <?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): $i = 0; $__LIST__ = $status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo !empty($row['id'])?$row['id'] : ''; ?>">
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        </div>
    </div>
</form>

</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/public/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>