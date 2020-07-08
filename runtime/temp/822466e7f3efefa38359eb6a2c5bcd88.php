<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/web/189556_com/public_html/application/competition/view/login/index.html";i:1593348052;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/public/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/public/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link href="/public/static/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/public/static/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/public/static/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/public/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/public/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="<?php echo url('Login/login'); ?>" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input name="username" type="text" placeholder="账户" class="input-text size-L"><br>
          <span id="username_msg"></span>
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input name="password" type="password" placeholder="密码" class="input-text size-L"><br>
          <span id="password_msg"></span>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" name="captcha" value="" style="width:220px;">&nbsp;&nbsp;
          <img src="<?php echo captcha_src(); ?>" class="verify" style="height: 40px;width: 125px;" onclick="javascript:this.src='<?php echo captcha_src(); ?>?rand='+Math.random()"><br>
          <span id="captcha_msg"></span>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="row cl">
          <div class="formControls col-xs-8 col-xs-offset-3" style="margin-top: 20px;">
            <input name="button" id="button" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="/public/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script>
    $(function () {
        $("#button").click(function () {
            //发送异步请求
            $.ajax({
                type : "post",
                url  : "<?php echo url('Login/login'); ?>",
                data : $('form').serialize(),
                dataType: "json",
                success: function (data) {

                    $("#username_msg").text("");
                    $("#password_msg").text("");
                    $("#captcha_msg").text("");
                    if(data.status == -1){
                        $("#username_msg").text(data.msg);//用户名错误
                    }else if(data.status == -2){
                        $("#password_msg").text(data.msg);//密码错误
                    }else if(data.status == 0){
                        $("#captcha_msg").text(data.msg);//验证码错误
                    }else if (data.status == 1) {
                        location.href = "<?php echo url('Index/index'); ?>";
                    }else{
                        alert("火星着陆");
                    }
                }
            });
        });
    });
</script>