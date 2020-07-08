<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\Users\gaming\Desktop\competition13/application/home\view\news\index.html";i:1592891450;s:69:"C:\Users\gaming\Desktop\competition13/application/home\view\base.html";i:1593384436;}*/ ?>
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
            <a style="font-size: 22px;" href="<?php echo url('User/logout'); ?>">退出登录</a>&nbsp;&nbsp;&nbsp;
            <a style="font-size: 22px;color: red;" href="<?php echo url('User/serch'); ?>">个人中心</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="logo"></div>
    
<div class="content">
    <div class="news-title">大赛新闻</div>
    <div class="news-list">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a class="news-item" href="<?php echo url('News/content',['id'=>$vo['id']]); ?>">
            <div class="news ell" style="text-align: center">
               <?php echo $vo['title']; ?>
            </div>
            <div class="news-time"><?php echo date("Y-m-d",$vo['create_time']); ?></div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class='page-nav'>
        <?php echo $page; ?>
    </div>
</div>

    <div class="bottom-wrap">
        <div class="bottom-nav">
            <span>关于我们</span>
        </div>
        <div class="bottom-contact">
            <div class="contact">组委会秘书处</div>
            <div class="contact">
                <p>联系人：郭媛媛（四川省通信行业职业技能鉴定中心）</p>
                <p>电话：028-87013875</p>
            </div>
            <div class="contact">
                <p>联系人：王洋（四川省通信管理局）</p>
                <p>电话：028-87016259 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13402814406</p>
            </div>
        </div>
        <div class="bottom-nav">
            <span>本次大赛最终解释权归主办方所有</span>
        </div>
    </div>
</div>

<div class="pop-model-wrap" id="reg">
    <div class="pop-model" style="height: 750px;">
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
                <input class="input" type="password" name="confirmPwd" value="" placeholder="再次确认密码"
                       autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="text" name="code" value="" placeholder="请输入验证码" autocomplete="off"/>
                <div class="yzm">
                    <img onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" src="<?php echo captcha_src(); ?>" alt="captcha"/>
                </div>
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
            <div class="forget-pwd">忘记密码？</div>
        </form>
    </div>
</div>


<!-- 报名 -->
<div class="pop-model-wrap" id="sign">
    <div class="pop-model" style="height: 700px;overflow:auto">
        <div class="pop-closed"></div>
        <form class="pop-form reg-form">
            <div class="input-item">
                <div class="input-tip">参赛项目名称</div>
                <input class="input" type="text" name="bm_project" value="" placeholder="" autocomplete="off"/>
            </div>
            <div class="input-item">
                <div class="input-tip">参赛主体:</div>
                <select name="bm_body" style="width: 430px;font-size: 18px;color: #666;">        
                    <option value="0">个人</option>
                            
                    <option value="1">单位</option>
                             
                    <option value="2">团队</option>
                     
                </select> 
            </div>
            <div class="input-item">
                <div class="input-tip">参赛单位名称</div>
                <input class="input" type="text" name="bm_username" value="" placeholder="个人参赛可不填" autocomplete="off"/>
            </div>

            <div class="input-item">
                <div class="input-tip">联系人</div>
                <input class="input" type="text" name="bm_contacts" value="" placeholder="" autocomplete="off"/>
            </div>
            <div class="input-item">
                <div class="input-tip">联系电话</div>
                <input class="input" type="text" name="bm_tel" value="" placeholder="" autocomplete="off"/>
            </div>
            <div class="input-item info-textarea">
                <textarea rows="4" name="bm_content" id="bm_content" placeholder="已在川开展5G项目名称："></textarea>
            </div>
            <button type="button" class="submit sign-submit" id="cansai">点击参赛</button>
        </form>
    </div>
</div>

<div class="pop-model-wrap" id="get-back-pwd">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="form-title c-blue">找回密码</div>
            <div class="input-item">
                <input class="input" type="text" name="tel" value="<?php echo \think\Session::get('tel'); ?>" placeholder="请输入手机号"
                       autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="text" name="code" value="" placeholder="输入验证码" autocomplete="off"/>
                <div class="input-tip send-code">发送验证码</div>
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
                <input class="input" type="text" name="username" value="<?php echo \think\Session::get('phone'); ?>" autocomplete="off"/>
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
<!-- 报名成功弹窗 -->
<div class="pop-model-wrap" id="sign-success">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="model-info-btn sign-succ">报名成功</div>
            <div class="model-info-btn sign-code">您的参赛编号为：<span id="u_id"></span></div>
            <div style="font-size: 20px;text-align: center;">参赛编号需填写至报名材料</div>
            <br>
            <div class="model-info-tip">
                请在规定的时间内上传报名材料至邮箱（sc5gds@163.com）
            </div>
            <a class="sign-message c-blue" href="<?php echo url('User/serch'); ?>">查看报名信息</a>
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
        /*报名*/
        $('.sign-btn').click(function () {
            var var_name = "<?php echo session('username'); ?>";
            if (var_name == '' || var_name == null) {
                alert("请先登录");
                $('#login').css('display', 'block');
                return false;
            } else {
                $('.pop-model-wrap').css('display', 'none')
                $('#sign').css('display', 'block');
            }
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
            var confirmPwd = $('#reg').find('input[name="confirmPwd"]').val();
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
            if (pwd != confirmPwd) {
                tip('两次输入密码不同')
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
                    if (res.code == -1) {
                        alert(res.msg);
                        return false;
                    } else if (res.code == -2) {
                        alert(res.msg);
                        return false;
                    } else if (res.code == -3) {
                        alert(res.msg);
                        return false;
                    } else {
                        alert(res.msg);
                        $('.pop-model-wrap').css('display', 'none')
                        $('#login').css('display', 'block');
                    }
                }
            })
        })

        $("#cansai").click(function () {
            var username = document.getElementsByName("bm_username")[0].value;
            var body = document.getElementsByName("bm_body")[0].value;
            if (body != 0) {
                if (username == "") {
                    tip("参赛单位名称不能为空");
                    return false;
                }
            }

            var project = document.getElementsByName("bm_project")[0].value;

            if (project == "") {
                tip("参赛项目名称不能为空");
                return false;
            }


            var content = document.getElementsByName("bm_content")[0].value;
            if (content == "") {
                tip("已在川开展5G项目名称不能为空");
                return false;
            }

            var contacts = document.getElementsByName("bm_contacts")[0].value;
            if (contacts == "") {
                tip("联系人不能为空");
                return false;
            }

            var tel = document.getElementsByName("bm_tel")[0].value;
            if (tel == "") {
                tip("联系电话不能为空");
                return false;
            }
            if (!(/^1[3456789]\d{9}$/.test(tel))) {
                tip("联系电话有误，请重填");
                return false;
            }

            $.ajax({
                type: "post",
                url: "<?php echo url('User/sign'); ?>",
                data: {
                    username: username,
                    project: project,
                    body: body,
                    contacts: contacts,
                    tel: tel,
                    content: content,
                },
                success: function (data) {
                    if (data.status == 1) {
                        $('#sign-success').css('display', 'block');
                        $("#u_id").text(data.uid);
                        // tip("报名成功");
                        return true;
                    } else if(data.status == -1) {
                        tip("此参赛项目已有人报名");
                        return false;
                    }else{
                        tip("报名失败,请联系管理员");
                        return false;
                    }
                }
            }, 'json')
        })

        //发送短信
        $('.send-code').click(function () {
            var tel = $('#get-back-pwd').find('input[name="tel"]').val();
            var rand = Math.random().toFixed(6).slice(-6);

            if (!checkPhone(tel)) {
                tip('请填写正确手机号')
                return false;
            }
            clearInterval(timer); //清除计时器
            var that = this;
            that.disabled = true;
            var count = 60;
            var timer = setInterval(function () {
                if (count > 0) {
                    count--;
                    that.innerHTML = "剩余时间" + count + "s";
                } else {
                    that.innerHTML = "重新发送短信";
                    that.disabled = false;
                    clearInterval(timer); //清除计时器
                }
            }, 1000);

            $.ajax({
                url: '<?php echo url("Send/send"); ?>',  //发送短信地址
                type: 'POST',
                data: {
                    tel: tel,
                    rand: rand,
                },
                dataType: 'json',
                success: function (res) {
                    if (res) {
                        alert("发送成功,注意查收");
                        return true;
                    } else {
                        alert("发送失败,请稍后再试");
                    }
                },
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
                    if (res.code == -1) {
                        alert(res.msg);
                        return false;
                    } else {
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
            var capt = "<?php echo session('capt'); ?>";

            if (!checkPhone(tel)) {
                tip('请填写正确手机号');
                return false;
            }
            if (code == '') {
                tip('验证码不能为空');
                return false;
            } else if (capt != code) {
                tip('验证码错误!');
                return false;
            }


            $('.get-back-pwd-submit').attr('disabled', 'disabled');
            $.ajax({
                url: '<?php echo url("User/find"); ?>',  //找回密码地址
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
                    password: pwd,
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