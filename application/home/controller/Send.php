<?php
namespace app\home\controller;
use think\Controller;

require VENDOR_PATH. 'vendor/autoload.php';
use \Yunpian\Sdk\YunpianClient;

class Send extends Controller
{
    public function send()
    {
        //初始化client, apikey作为所有请求的默认值
        //账户$clnt->user() 签名$clnt->sign() 模版$clnt->tpl() 短信$clnt->sms()
        // 语音$clnt->voice() 流量$clnt->flow() 视频短信$clnt->vsms()
        $clnt = YunpianClient::create('833832d49bef12dab3b6286cc7fd64eb');

        $data = input();
        $tel = $data['tel'];/*手机号*/
        $rand = $data['rand'];/*验证码*/

        $param = [YunpianClient::MOBILE => $tel, YunpianClient::TEXT => '【四川5G大赛】您的验证码是'.$rand];
        $r = $clnt->sms()->single_send($param);
        if ($r->isSucc()) {
            session_start();
            session('code',$rand);
            session('phone',$tel);
            $code = session('code');
            $phone = session('phone');
            dump($code.$phone);die;
            return json(['rand'=>$rand,'code'=>1]);
        } else {
            return json(['rand'=>$rand,'code'=>0]);
        }
    }
}