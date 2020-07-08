<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\phpStudy\PHPTutorial\WWW\competition\public/../application/home\view\intro\standard.html";i:1593001355;s:81:"D:\phpStudy\PHPTutorial\WWW\competition\public/../application/home\view\base.html";i:1593007712;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2020年四川省5G创新应用大赛</title>
    <link rel="stylesheet" href="__HOME_CSS__/base.css">
    <link rel="stylesheet" href="__HOME_CSS__/index.css">
    <script type="text/javascript" src="__HOME_JS__/jquery.js"></script>
</head>
<body>
<div class="main">
    <div class="top-nav">
        <div class="nav-title">2020年四川省5G创新应用大赛</div>
        <?php if($nav == 1): ?>
        <div class="nav-list">
            <a class="nav nav-cur" href="javascript:">大赛首页</a>
            <a class="nav" href="<?php echo url('Intro/index'); ?>">大赛指南</a>
            <a class="nav" href="<?php echo url('News/index'); ?>">大赛新闻</a>
        </div>
        <?php elseif($nav == 2): ?>
        <div class="nav-list">
            <a class="nav" href="<?php echo url('Index/index'); ?>">大赛首页</a>
            <a class="nav nav-cur" href="javascript:">大赛指南</a>
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

<div class="content">
    <div class="sub-nav-wrap">
        <a class="sub-nav" href="<?php echo url('Intro/index'); ?>">大赛简介</a>
        <a class="sub-nav" href="<?php echo url('Intro/org'); ?>">大赛组织</a>
        <a class="sub-nav sub-nav-cur" href="javascript:">评审标准</a>
        <a class="sub-nav" href="<?php echo url('Intro/reward'); ?>">奖励政策</a>
        <a class="sub-nav" href="<?php echo url('Intro/arrange'); ?>">赛事安排</a>
        <div class="sub-nav-line"></div>
    </div>
    <div class="sub-content no-crumbs">
        <div class="sub-content-info-wrap">
            <div class="sub-content-info">
                <table class="standard-table" border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <th align="center" style="width: 22%;">一级指标及权重</th>
                        <th align="center" style="width: 22%;">二级指标及权重</th>
                        <th align="center" style="width: 56%;">指标描述</th>
                    </tr>
                    <tr>
                        <td rowspan="2" align="center">功能性（20%）</td>
                        <td align="center">创意性（50%）</td>
                        <td align="left">项目的新颖性，产品设计的独特性、创造性。</td>
                    </tr>
                    <tr>
                        <!-- <td rowspan="2" align="center">功能性（20%）</td> -->
                        <td align="center">项目方案（50%）</td>
                        <td align="left">项目技术深度、复杂度、合理性、先进性以及其在市场中的领先程度。</td>
                    </tr>
                    <tr>
                        <td rowspan="3" align="center">实用性（40%）</td>
                        <td align="center">可实施性（40%）</td>
                        <td align="left">项目的可实施性和落地情况。</td>
                    </tr>
                    <tr>
                        <!-- <td rowspan="2" align="center">功能性（20%）</td> -->
                        <td align="center">商用实践（30%）</td>
                        <td align="left">项目与产业结合的成果与前景。</td>
                    </tr>
                    <tr>
                        <!-- <td rowspan="2" align="center">功能性（20%）</td> -->
                        <td align="center">示范效应（30%）</td>
                        <td align="left">项目已开展试点示范，项目对产业链的影响，对所应用的行业发展的影响，以及对技术发展的预期影响。</td>
                    </tr>
                    <tr>
                        <td rowspan="2" align="center">商业性（30%）</td>
                        <td align="center">商业规划（50%）</td>
                        <td align="left">1.项目的获利方式和发展规划；<br>
 2.市场开发策略、份额预期。
</td>
                    </tr>
                    <tr>
                        <!-- <td rowspan="2" align="center">功能性（20%）</td> -->
                        <td align="center">市场优势（50%）</td>
                        <td align="left">1.市场现状和未来需求趋势分析 ；<br> 2.市场定位、现有以及潜在竞争者对标分析、替代品竞争分析；</td>
                    </tr>
                    <tr>
                        <td align="center">社会效益（10%）</td>
                        <td align="center">社会效益（100%）</td>
                        <td align="left">对四川社会服务、文化、民生等的贡献和价值。</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="sub-across-bg"></div>
        <div class="sub-across-bg sub-across-bg-bottom"></div>
        <div class="sub-vertical-bg"></div>
        <div class="sub-vertical-bg sub-vertical-bg-right"></div>
    </div>
</div>
</div>


    <div class="bottom-wrap">
        <div class="bottom-nav">
            <span>关于我们</span>
        </div>
        <div class="bottom-contact">
            <div class="contact">大赛组委会</div>
            <div class="contact">
                <p>联系人：郭老师（四川省通信行业职业技能鉴定中心）</p>
                <p>电话：028-87013875</p>
            </div>
            <div class="contact">
                <p>联系人：汪洋（四川省通信管理局）</p>
                <p>电话：028-87016259 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13402814406</p>
            </div>
        </div>
		<div class="bottom-nav">
		    <span>本次大赛最终解释权归主办方所有</span>
		</div>
    </div>
</div>

<div class="pop-model-wrap" id="reg">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <div class="pop-switch">已有账号，<span class="c-blue switch-login">去登录</span></div>
        <form class="pop-form reg-form">
            <div class="form-title c-blue">注册</div>
            <div class="input-item">
                <input class="input" type="text" name="username" value="" placeholder="请输入用户名" autocomplete="off"/>
            </div>
            <div class="input-item">
                <div class="input-tip">86</div>
                <input class="input" type="text" name="tel" value="" placeholder="请输入手机号" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="password" value="" placeholder="设置6-12位密码(由字母、数字组合)"
                       autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="text" name="code" value="" placeholder="请输入验证码" autocomplete="off"/>
                <div class="yzm">
                    <img onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" src="<?php echo captcha_src(); ?>" alt="captcha" />
                </div>
            </div>
            <div class="form-tip">
                <span class="form-tip-icon"></span>
                <span>注册即表示您已同意</span>
                <span class="agreement">《2020年5G创新应用大赛服务协议》</span>
            </div>
            <button type="button" class="submit reg-submit">确认注册</button>
        </form>
    </div>
</div>
<div class="pop-model-wrap" id="login">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <div class="pop-switch"><span class="c-blue switch-reg">立即注册</span></div>
        <form class="pop-form">
            <div class="form-title c-blue">登录</div>
            <div class="input-item">
                <input class="input" type="text" name="username" value="" placeholder="用户名/手机号码" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="password" value="" placeholder="登录密码" autocomplete="off"/>
            </div>
            <button type="button" class="submit login-submit">登录</button>
        </form>
    </div>
</div>
<div class="pop-model-wrap" id="get-back-pwd">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="form-title c-blue">找回密码</div>
            <div class="input-item">
                <input class="input" type="text" name="tel" value="" placeholder="请输入手机号码" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="text" name="code" value="" placeholder="输入验证码" autocomplete="off"/>
                <div class="input-tip send-code">发送手机</div>
            </div>
            <button type="button" class="submit get-back-pwd-submit">确定</button>
        </form>
    </div>
</div>
<div class="pop-model-wrap" id="reset-pwd">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="form-title c-blue">重置密码</div>
            <div class="input-item">
                <input class="input" type="text" name="username" value="" placeholder="用户名/手机号码" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="password" value="" placeholder="新密码" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="confirmPwd" value="" placeholder="确认新密码" autocomplete="off"/>
            </div>
            <button class="submit reset-pwd-submit">登录</button>
        </form>
    </div>
</div>
<!-- 报名模板弹窗 -->
<div class="pop-model-wrap" id="sign-data">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="form-title c-blue">报名材料</div>
            <div class="form-model-info">报名材料填写模板</div>
			<a class="model-info-btn" href="">点击下载</a>
			<div class="model-info-tip c-blue">
				报名材料上传至大赛指定邮箱（sc5gds@163.com）
			</div>
        </form>
    </div>
</div>
<!-- 报名成功弹窗 -->
<div class="pop-model-wrap" id="sign-success">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
			<div class="model-info-btn sign-succ">报名成功</div>
			<div class="model-info-btn sign-code">您的参赛编号为：202006240001</div>
			<div class="model-info-tip">
				请在规定的时间内上传报名材料至邮箱（sc5gds@163.com）
			</div>
			<a class="sign-message c-blue" href="">查看报名信息</a>
        </form>
    </div>
</div>

<script type="text/javascript" src="__HOME_JS__/base.js"></script>
<script>

    $(function () {

        $('.pop-closed').click(function () {
            $('.pop-model-wrap').css('display', 'none');
        })
        // 注册按钮
        $('.reg-btn').click(function () {
            $('#reg').css('display', 'block');
        })
        // 登录按钮
        $('.login-btn').click(function () {
            $('#login').css('display', 'block');
        })
        // 去注册
        $('.switch-reg').click(function () {
            $('.pop-model-wrap').css('display', 'none')
            $('#reg').css('display', 'block');
        })
        // 去登录
        $('.switch-login').click(function () {
            $('.pop-model-wrap').css('display', 'none')
            $('#login').css('display', 'block');
        })
        // 找回密码
        $('.forget-pwd').click(function () {
            $('.pop-model-wrap').css('display', 'none')
            $('#get-back-pwd').css('display', 'block');
        })

        // 提交注册
        $('.reg-submit').click(function () {
            var name = $('#reg').find('input[name="username"]').val();
            var tel = $('#reg').find('input[name="tel"]').val();
            var pwd = $('#reg').find('input[name="password"]').val();
            var code = $('#reg').find('input[name="code"]').val();
            var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/;

            if (name == '') {
                tip('用户名不能为空')
                return false;
            }
            if (!checkPhone(tel)) {
                tip('请填写正确手机号')
                return false;
            }
            if (!reg.test(pwd) || pwd.length < 6 || pwd.length > 12) {
                tip('密码必须为6-12位的数字和字母的组合')
                return false;
            }
            if (code == '') {
                tip('验证码不能为空')
                return false;
            }

            $('.reg-submit').attr('disabled', 'disabled');
            $.ajax({
                url: '<?php echo url("User/reg"); ?>',  //注册地址
                method: 'POST',
                data: {
                    username: name,
                    tel: tel,
                    password: pwd,
                    code: code
                },
                dataType: 'json',
                success: function (res) {
                    if(res.code == -1){
                        alert(res.msg);
                        return false;
                    }else if(res.code == -2){
                        alert(res.msg);
                        return false;
                    }else if(res.code == -3){
                        alert(res.msg);
                        return false;
                    }else{
                        alert(res.msg);
                        return true;
                    }
                }
            })
        })

        // 提交登录
        $('.login-submit').click(function () {
            var name = $('#login').find('input[name="username"]').val();
            var pwd = $('#login').find('input[name="password"]').val();

            if (name == '') {
                tip('用户名不能为空')
                return false;
            }
            if (pwd == '') {
                tip('密码不能为空')
                return false;
            }

            $('.login-submit').attr('disabled', 'disabled');
            $.ajax({
                url: '<?php echo url("User/login"); ?>',  //登录地址
                method: 'POST',
                data: {
                    username: name,
                    password: pwd
                },
                dataType: 'json',
                success: function (res) {
                    if (res.code == -1){
                        alert(res.msg);
                        return false;
                    }else{
                        alert(res.msg);
                        location.href = '<?php echo url("Index/index"); ?>';
                    }
                }
            })
        });

        // 提交找回密码
        $('.get-back-pwd-submit').click(function () {
            var tel = $('#get-back-pwd').find('input[name="tel"]').val();
            var code = $('#get-back-pwd').find('input[name="code"]').val();

            if (!checkPhone(tel)) {
                tip('请填写正确手机号')
                return false;
            }
            if (code == '') {
                tip('验证码不能为空')
                return false;
            }

            $('.get-back-pwd-submit').attr('disabled', 'disabled');
            $.ajax({
                url: 'login',  //找回密码地址
                method: 'POST',
                data: {
                    tel: tel,
                    code: code
                },
                dataType: 'json',
                success: function (res) {
                    // ....
                    $('.pop-model-wrap').css('display', 'none')
                    $('#reset-pwd').css('display', 'block');
                },
                fail: function (err) {
                    // ...
                },
                complete: function () {
                    $('.get-back-pwd-submit').attr('disabled', 'true');
                },
            })
        })

        // 提交重置密码
        $('.reset-pwd-submit').click(function () {
            var name = $('#reset-pwd').find('input[name="name"]').val();
            var pwd = $('#reset-pwd').find('input[name="password"]').val();
            var confirmPwd = $('#reset-pwd').find('input[name="confirmPwd"]').val();
            var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/;

            if (name == '') {
                tip('用户名不能为空')
                return false;
            }
            if (!reg.test(pwd) || pwd.length < 6 || pwd.length > 12) {
                tip('密码必须为6-12位的数字和字母的组合')
                return false;
            }
            if (pwd != confirmPwd) {
                tip('两次输入密码不同')
                return false;
            }

            $('.reset-pwd-submit').attr('disabled', 'disabled');
            $.ajax({
                url: 'login',  //重置密码地址
                method: 'POST',
                data: {
                    name: name,
                    pwd: pwd,
                    confirmPwd: confirmPwd
                },
                dataType: 'json',
                success: function (res) {
                    // ....
                    location.reload();
                },
                fail: function (err) {
                    // ...
                },
                complete: function () {
                    $('.reset-pwd-submit').attr('disabled', 'true');
                },
            })
        })

    })
</script>
</body>
</html>