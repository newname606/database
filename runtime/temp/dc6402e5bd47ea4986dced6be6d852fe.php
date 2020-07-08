<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\Users\gaming\Desktop\competition/application/home\view\index\index.html";i:1593427520;s:67:"C:\Users\gaming\Desktop\competition/application/home\view\base.html";i:1593434603;}*/ ?>
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
            <a style="font-size: 22px;color: #399bff;" href="<?php echo url('User/serch'); ?>">个人中心</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="logo"></div>
    
<!--公共头部-->
<div class="content">
    <div class="light-bg"></div>
    <div class="light-bg light-bg-right"></div>
    <div class="content-title"></div>
    <div class="content-sub-title">领航新基建  融创新未来</div>
    <div class="info-wrap">
        <div class="info-time" >赛事时间：2020年7月-2020年8月</div>
        <div class="hold">
            <div class="hold-left hold-just">
                <div>主办单位</div>
                <div>承办单位</div>
                <div>协办单位</div>
                <div>技术支持单位</div>
            </div>
            <div class="hold-left">
                <div>：</div>
                <div>：</div>
                <div>：</div>
                <div>：</div>
            </div>
            <div class="hold-left">
                <div>四川省通信管理局、四川省总工会</div>
                <div>四川通信行业职业技能鉴定中心</div>
                <div>四川省5G产业联盟</div>
                <div>中国电信股份有限公司四川分公司</div>
                <div>中国移动通信集团四川有限公司</div>
                <div>中国联合网络通信集团有限公司四川省分公司</div>
                <div>成都索贝数码科技股份有限公司</div>
            </div>
        </div>
        <div class="info-code">
            <div class="code-img">
                <img src="__HOME_IMG__/code.png">
            </div>
            <div class="code-tip">关注微信公众号</div>
            <a class="sign-btn" href="javascript:">
                参赛报名
            </a>
        </div>
    </div>
</div>

    <div class="bottom-wrap">
        <div class="bottom-nav">
            <span>关于我们</span>
        </div>
        <div class="bottom-contact">
            <div class="contact">组委会秘书处</div>
            <div class="contact">
                <p>联系人：郭媛媛</p>
                <p>电话：028-87013875</p>
            </div>
            <div class="contact">
                <p>联系人：王洋</p>
                <p>电话：028-87016259 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13402814406</p>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="contact">支持单位&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="contact">
                <p>联系人:&nbsp; 郑静雯</p>
                <p>电话:&nbsp; 13350252717</p>
            </div>
            <div class="contact">
                <p>&nbsp;&nbsp;联系人:&nbsp; 张祥</p>
                <p>&nbsp;&nbsp;电话:&nbsp; 15680782787</p>
            </div>
        </div>

        <div class="bottom-contact">
            <div class="contact" style="padding-bottom: 30px;padding-top: 10px;">本次大赛最终解释权归主办方所有</div>
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
                <div class="input-tip">参赛主体名称</div>
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
                <textarea rows="4" name="bm_content" id="bm_content" placeholder="已在川开展5G项目名称(没有必须填无!)："></textarea>
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
                <input class="input" type="text" name="fd_tel" value="<?php echo \think\Session::get('tel'); ?>" placeholder="请输入手机号"
                       autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="text" name="fd_code" value="" placeholder="输入验证码" autocomplete="off"/>
                <div class="input-tip send-code">发送验证码</div>
            </div>
            <button type="button" class="submit get-back-pwd-submit" id="makesure">确定</button>
        </form>
    </div>
</div>
<div class="pop-model-wrap" id="reset-pwd">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="form-title c-blue">重置密码</div>
            <div class="input-item">
                <input class="input" type="text" name="re_tel" value="<?php echo \think\Session::get('phone'); ?>" placeholder="请输入手机号" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="re_password" value="" placeholder="新密码" autocomplete="off"/>
            </div>
            <div class="input-item">
                <input class="input" type="password" name="re_confirmPwd" value="" placeholder="确认新密码" autocomplete="off"/>
            </div>
            <button class="submit reset-pwd-submit">确定</button>
        </form>
    </div>
</div>
<!-- 报名成功弹窗 -->
<div class="pop-model-wrap" id="sign-success">
    <div class="pop-model">
        <div class="pop-closed"></div>
        <form class="pop-form">
            <div class="model-info-btn sign-succ">报名成功</div>
            <div class="model-info-btn sign-code">您的报名编号为：<span id="u_id"></span></div>
            <div style="font-size: 20px;text-align: center;">报名编号需填写至报名材料</div>
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
                tip("请先登录");
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
                        tip(res.msg);
                        return false;
                    } else if (res.code == -2) {
                        tip(res.msg);
                        return false;
                    } else if (res.code == -3) {
                        tip(res.msg);
                        return false;
                    } else {
                        tip(res.msg);
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
                        return true;
                    }else if(data.status == -1) {
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
            var tel = document.getElementsByName("fd_tel")[0].value;
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
                        tip("发送成功,注意查收");
                        return true;
                    } else {
                        tip("发送失败(重复提交次数过多,一小时后再试)!");
                        return false;
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
        })

        // 提交找回密码
        $('#makesure').click(function () {
            var tel = document.getElementsByName("fd_tel")[0].value;
            var code = document.getElementsByName("fd_code")[0].value;

            if(!checkPhone(tel)){
                tip("请输入正确手机号");
                return false;
            }
            if(tel == '' || tel==null){
                tip("手机号不能为空");
                return false;
            }
            if(code == '' || code==null){
                tip("验证码不能为空");
                return false;
            }
            $('.get-back-pwd-submit').attr('disabled', 'disabled');
            $.ajax({
                url: '<?php echo url("User/find"); ?>',  //找回密码地址
                method: 'POST',
                data: {
                    tel: tel,
                    code:code,
                },
                dataType: 'json',
                success: function (data) {
                    if (data == 1) {
                        tip("验证成功");
                        $('.pop-model-wrap').css('display', 'none')
                        $('#reset-pwd').css('display', 'block');
                    } else if(data == 0) {
                        tip("手机号不存在");
                        return false;
                    }else if(data == -1){
                        tip("验证码错误");
                        return false;
                    }
                },
            })
        })

        // 提交重置密码
        $('.reset-pwd-submit').click(function () {
            var tel = document.getElementsByName("re_tel")[0].value;
            var pwd = document.getElementsByName("re_password")[0].value;
            var confirmPwd = document.getElementsByName("re_confirmPwd")[0].value;
            var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/;

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
                url: '<?php echo url("User/reset"); ?>',  //重置密码地址
                method: 'POST',
                data: {
                    tel: tel,
                    password: pwd
                },
                dataType: 'json',
                success: function (res) {
                    if (res) {
                        tip('重置成功,可以登陆了');
                        $('.reset-pwd-submit').attr('display', 'none');
                        $('#login').css('display', 'block');
                    } else {
                        tip("重置失败,请联系管理员");
                        return false;
                    }
                },
            })
        })
    })
</script>

</body>
</html>