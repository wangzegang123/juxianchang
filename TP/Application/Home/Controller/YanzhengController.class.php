<?php 
/**
 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
 * @author Tanxu
 */
namespace Home\Controller;
use \Org\Util\GeetestLib;
use Think\Controller;

class YanzhengController extends Controller {
    function YanzhenggetVerify(){
        $GtSdk = new GeetestLib(C('CAPTCHA_ID'), C('PRIVATE_KEY'));
        session_start();
        $data = array(
            "user_id" => "web", # 网站用户id
            "client_type" => "web", #web:电脑上的浏览器；h5:手机上的浏览器，包括移动应用内完全内置的web_view；native：通过原生SDK植入APP应用的方式
            "ip_address" => "127.0.0.1" # 请在此处传输用户请求验证时所携带的IP
        );
        //宕机检查
        $status = $GtSdk->pre_process($data,"$_GET('new_captcha')");
        session('gtserver',$status);
        session('user_id',$data['user_id']);
        echo $GtSdk->get_response_str();
    }
}

