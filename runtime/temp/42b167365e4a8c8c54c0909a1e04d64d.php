<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"C:\Users\gaming\Desktop\competition\public/../application/home\view\user\serch.html";i:1593327214;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2020年四川省5G创新应用大赛</title>
    <link rel="stylesheet" href="__HOME_CSS__/base.css">
    <link rel="stylesheet" href="__HOME_CSS__/index.css">
    <script type="text/javascript" src="__HOME_JS__/jquery.js"></script>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        table,
        td,
        th {
            border: 1px solid white;
            text-align: center;
            padding: 10px 0;

        }
        td{
            color: white;
        }
        th {
            background-color: #337ab7;
            color: white;
            min-width: 190px;

        }
    </style>
</head>
<body>
<div class="main">
    <div class="top-nav">
        <div class="nav-title">2020年四川省5G创新应用大赛</div>
        <?php if($nav == 1): ?>
        <div class="nav-list">
            <a class="nav nav-cur" href="<?php echo url('Index/index'); ?>">大赛首页</a>
            <a class="nav" href="<?php echo url('Intro/index'); ?>">大赛指南</a>
            <a class="nav" href="<?php echo url('News/index'); ?>">大赛新闻</a>
        </div>
        <?php elseif($nav == 2): ?>
        <div class="nav-list">
            <a class="nav" href="<?php echo url('Index/index'); ?>">大赛首页</a>
            <a class="nav nav-cur" href="<?php echo url('Intro/index'); ?>">大赛指南</a>
            <a class="nav" href="<?php echo url('News/index'); ?>">大赛新闻</a>
        </div>
        <?php else: ?>
        <div class="nav-list">
            <a class="nav" href="<?php echo url('Index/index'); ?>">大赛首页</a>
            <a class="nav" href="<?php echo url('Intro/index'); ?>">大赛指南</a>
            <a class="nav nav-cur" href="javascript;">大赛新闻</a>
        </div>
        <?php endif; ?>

        <div class="top-login">

            <?php if(\think\Session::get('username') == null): ?>
            <span class="reg-btn">注册</span>
            <span class="top-login-center">|</span>
            <span class="login-btn">登录</span>
            <?php else: ?>
            <span>欢迎<?php echo \think\Session::get('username'); ?></span>
            &nbsp;&nbsp;&nbsp;
            <a style="font-size: 25px;" href="<?php echo url('User/logout'); ?>">退出登录</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="logo"></div>
</div>
<table>
    <tr>
        <th>报名编号</th>
        <th>项目名称</th>
        <th>单位名称</th>
        <th>联系人</th>
        <th>联系电话</th>
        <th>在川开展项目名称</th>

    </tr>
    <tr>
        <td>262637373828</td>
        <td>瓜皮</td>
        <td>腾讯</td>
        <td>cheng</td>
        <td>15875720156</td>
        <td>瓜皮</td>
    </tr>

</table>
<script type="text/javascript" src="__HOME_JS__/base.js"></script>

</body>
</html>