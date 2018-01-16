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
                    $id=$model->query("select member_id from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                    if($arr){
                        session("mid",$id);
                        $this->redirect('index/activity_person');
                    }else{
                        echo "<script>alert('用户名或密码有误');location='login'</script>";
                    }
                } else {
                    echo '{"status":"fail"}';
                }
            } else {  //服务器宕机,走failback模式
                if ($GtSdk->fail_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'])){
                    $name=$_POST["username"];
                    $pwd=trim(md5($_POST["password"]));
                    $model=M("member");
                    $arr=$model->query("select * from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                    $id=$model->query("select member_id from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                    if($arr){
                        session("mid",$id);
                        $this->redirect('index/activity_person');
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
                       $id=$model->query("select member_id from jxc_member where member_name='{$name}' and member_pwd='{$pwd}'");
                        if($arr){
                            session("mid",$id);
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


//    注册
//发送手机短语验证码
    function sendCode(){
        //$message=new Message();
        //$target = "http://106.ihuyi.cn/webservice/Message.class.php?method=Submit";

        /*msm.php代码复制开始*/

        $target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
        $mobile = $_POST['mobile'];
        $send_code = $_POST['send_code'];
        $mobile_code =$this->random(4,1);
        /*dump($mobile_code);
        die;*/

        if(empty($mobile)){
            exit('手机号码不能为空');
            //$this->back()->with("msg","密码不能为空");
        }

        if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
            //防用户恶意请求
            exit('请求超时，请刷新页面后重试');
        }
        /*自己的APIKEY秘密*/
        $apiid="C98686393";
        $apikey="5b294cc5a895cb515e1b0c082aca7b4e";
        $post_data = "account={$apiid}&password={$apikey}&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
        //$post_data = "account={$apiid}&password={$apikey}&mobile=".$mobile."&content=".rawurlencode($mobile_code);
//密码可以使用明文密码或使用32位MD5加密
        $me=$this->Post($post_data,$target);
        echo  $me;
        /*$gets = $message->xml_to_array($me);*/
        //$gets =$message->xml_to_array(Post($post_data, $target));
        $gets =$this->xml_to_array($me);
        //dump($gets);
        //die;
        if($gets['SubmitResult']['code']==2){
            $_SESSION['mobile'] = $mobile;
            $_SESSION['mobile_code'] = $mobile_code;
        }

        echo $gets['SubmitResult']['msg'];
    }






    function random($length = 6 , $numeric = 0){
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        if($numeric) {
            $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
        } else {
            $hash = '';
            $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
            $max = strlen($chars) - 1;
            for($i = 0; $i < $length; $i++) {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }
    function Post($curlPost,$url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return $return_str;
    }
//xml格式数据转换为数组格式
    function xml_to_array($xml){
        $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
        if(preg_match_all($reg, $xml, $matches)){
            $count = count($matches[0]);
            for($i = 0; $i < $count; $i++){
                $subxml= $matches[2][$i];
                $key = $matches[1][$i];
                if(preg_match( $reg, $subxml )){
                    $arr[$key] = $this->xml_to_array( $subxml );
                }else{
                    $arr[$key] = $subxml;
                }
            }
        }
        return $arr;
    }

    /*    msm.php代码复制   结束*/


    function emptyUname(){
        $uname = $_POST['username'];
        $member = M("member");
        $info = $member->where("member_name='{$uname}'")->select();
        if (count($info) != 0){
            echo "用户名已存在";
        }
    }
    function register(){
        if (IS_POST){//注册
//            dump($_POST);die;
            $data['member_name'] = $_POST['username'];
            $data['member_phone'] = $_POST['mobile'];
            $passwordConfirm = md5($_POST['passwordConfirm']);
            $data['member_pwd'] = md5($_POST['password']);
            $tiaokuan = $_POST['terms'];
            if ($_POST['mobile'] != $_SESSION['mobile'] or $_POST['mobile_code'] != $_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])) {
                echo '验证码或手机号码输入错误';
                /*$this->ajaxReturn($data);*/
                $this->display("login/register");
            }else{
                    if ($data['member_pwd'] == $passwordConfirm) {
                        $member = M("member");
                        $add = $member->add($data);
                        $this->success("恭喜你，用户添加成功","login/login");
                    } else {
                        echo('密码输入不一致，请重新输入');
                        $this->display("index/register");
                    }


            }
        }else{
            $_SESSION['send_code']=$this->random(4,1);
            //  $this->redirect("login/register");
            //$this->assign('send_code',$_SESSION['send_code']);
            $this->display("login/register");
        }

    }
}