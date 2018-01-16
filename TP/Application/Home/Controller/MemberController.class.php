<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;
use Think\Upload;

class MemberController extends Controller{
    public function member_info(){

        if(IS_AJAX) {
            $member_header = $_GET['member_header'];
            $member_sex = $_GET['member_sex'];
            $model = M("member");
            $map['member_name'] =$_GET['member_name'];
            if ($member_header=='undefined'){
                $date['member_sex'] = $member_sex;
                $res = $model->where($map)->save($date);
            } else {
                    $info=getimagesize($member_header);//获取图片大小
                    $img1=imagecreatefromjpeg($member_header);//打开jpg图片资源
                    $img2=imagecreatetruecolor(80,80);//创建画布
                    imagecopyresampled($img2,$img1, 0, 0, 0, 0, 80 , 80 , $info[0], $info[1]);//缩放图片
                    $saveName=strstr($member_header,"\\",false);
                    $savePath="./Public/Home/member_header/{$saveName}";
                    imagejpeg($img2,$savePath);//bool imagejpeg ( resource image [, string filename [, int quality]] )
                    $data['member_header']=$member_header;
                    $data['member_sex']=$member_sex;
                    $res=$model->where($map)->save($data);
            }
            if($res) {
                echo "1";
            } else {
                echo "2";
            }
        }
        else{
                $this->display("index/member_info");
            }
        }
    public function member_pwd(){
        if(IS_AJAX){
            $oldpwd=md5($_GET['oldpassword']);
            $model=M("member");
            $map['member_name']=array('eq','LZ123456');
            $map['member_pwd']=array('eq',"{$oldpwd}");
            $res=$model->where($map)->select();
            if($res){
                echo 'true';
            }else{
                echo 'false';
            }
        }else{
            if(IS_POST){
                $password=md5($_POST['password']);
                $model=M('member');
                $map['member_name']=array('eq','LZ123456');
                $res=$model->where($map)->save(['member_pwd'=>$password]);
                if($res){
                    $this->success("修改成功",'member_info');
                }else{
                    $this->error("修改失败",'member_pwd');
                }
            }else{
                $this->display("index/member_pwd");
            }
        }
    }
}