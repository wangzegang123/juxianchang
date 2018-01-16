<?php
namespace Home\Controller;
use Think\Controller;
use \Org\Util\GeetestLib;
class LoginController extends Controller {
    public function login(){
      $this->display("login");
    }
    public function login_index(){
        if($_POST){

            $GtSdk = new GeetestLib(C('CAPTCHA_ID'), C('PRIVATE_KEY'));
            session_start();
            $data = array(
                "user_id" => session("user_id"), # 网站用户id
                "client_type" => "web", #web:电脑上的浏览器；h5:手机上的浏览器，包括移动应用内完全内置的web_view；native：通过原生SDK植入APP应用的方式
                "ip_address" => "127.0.0.1" # 请在此处传输用户请求验证时所携带的IP
            );
            if ($_SESSION['gtserver'] == 1) {   //服务器正常
                $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $data);
                if ($result) {
                    $name=$_POST["username"];
                    $pwd=trim(md5($_POST["password"]));
                    $model=M("member");
                    $arr=$model->query("select * from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                    if($arr){
                        session("name",$name);
                        echo "<script>alert('登陆成功');location='index'</script>";
                    }else{
                        echo "<script>alert('用户名或密码有误');location='login'</script>";
                    }
                } else {
                    echo '{"status":"fail"}';
                }
            } else {  //服务器宕机,走failback模式
                if ($GtSdk->fail_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'])) {
                    $name=$_POST["username"];
                    $pwd=trim(md5($_POST["password"]));
                    $model=M("member");
                    $arr=$model->query("select * from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                    if($arr){
                        session("name",$name);
                        echo "<script>alert('登陆成功');location='main'</script>";
                    }else{
                        echo "<script>alert('用户名或密码有误');location='login'</script>";
                    }
                }else{
                    $ver = new \Think\Verify();
                    if($ver->check($_POST['very'])){
                        $name=$_POST["username"];
                        $pwd=md5($_POST["password"]);
                        $model=M("member");
                        $arr=$model->query("select * from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                        if($arr){
                            session("name",$name);
                            echo "<script>alert('登陆成功');location='main'</script>";
                        }else{
                            echo "<script>alert('用户名或密码有误');location='login'</script>";
                        }
                    }else{
                        echo "<script>alert('验证码错误');location='main'</script>";
                    }

                }
            }
        }else{
        }
        $this->display("login_index");
    }
    public function verify(){
        $config = array(
            'fontSize' => 60,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => true // 关闭验证码杂点
        );
        ob_clean();
        $ver = new \Think\Verify($config);
        $ver->entry();
    }
}