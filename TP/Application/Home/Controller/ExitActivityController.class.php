<?php
namespace Home\Controller;
use Think\Controller;
class ExitActivityController extends Controller {
    public function ExitActivity(){
        $model=M("activity");
        if($_POST){
            $id=$_POST['id'];
            $data['activity_theme']=$_POST['activity_theme'];
            $data['activity_pwd']=$_POST['activity_pwd'];
            $data['activity_whether_follow']=$_POST['gz_must'];
            $data['activity_open_area']=$_POST['open_gps'];
            if($data['activity_open_area']==1){
                $data['activity_open_debug']=$_POST['open_gps_tiaoshi'];
                $data['activity_limit_area']=$_POST['must_location'];
                $data['activity_valid_time']=$_POST['success_time'];
            }
            $data['activity_user_audit']=$_POST['status'];
            $data['activity_user_share']=$_POST['is_share'];
            $res=$model->where("activity_id=$id")->save($data);
            if($res){
                $this->error("修改成功");
            }else{
                $this->error("修改失败");
            }
        }else{
            $activity_id=$_GET['id'];
            $data = $model->where("activity_id=$activity_id")->find();
            $this->assign("data",$data);
            $this->display("index/basicSet");
        }

    }
    public function activityfunc(){
        $activity_id=$_GET['id'];
        $model=M("activity");
        $data = $model
            ->JOIN("jxc_activity_functions ON jxc_activity.activity_id=jxc_activity_functions.activity_id")
            ->where("jxc_activity.activity_id='{$activity_id}'")
            ->find();
        $this->assign("data",$data);
//        dump($data);die;
        $this->display("index/activityfunc");
    }
}