<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\Users\gaming\Desktop\competition13/application/home\view\user\serch.html";i:1593383495;}*/ ?>
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
            font-size: 16px;
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
            min-width: 150px;

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
        <th>参赛主体</th>
        <th>单位名称</th>
        <th>联系人</th>
        <th>联系电话</th>
        <th style="width: 300px;">在川开展项目名称</th>
        <th >项目状态</th>

    </tr>
    <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $list['u_id']; ?></td>
        <td><?php echo $list['project']; ?></td>
        <?php if($list['body'] == 0): ?>
        <td>个人</td>
        <?php elseif($list['body'] == 1): ?>
        <td>单位</td>
        <?php else: ?>
        <td>团队</td>
        <?php endif; ?>
        <td><?php echo !empty($list['username'])?$list['username']:''; ?></td>
        <td><?php echo $list['contacts']; ?></td>
        <td><?php echo $list['tel']; ?></td>
        <td><?php echo $list['content']; ?></td>
        <td><?php echo $list['s_name']; ?></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<script type="text/javascript" src="__HOME_JS__/base.js"></script>

</body>
</html>