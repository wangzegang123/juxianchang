<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
          echo "1111";
    }
    public function person_activity(){//我的活动页面列表
        /*1、判断是否登录，登录获取保存session里的用户id，未登录跳登录页面
         * 2、查询活动表，（查询此用户购买所有活动）
         * 3、如果没有公共头部，查询用户表（查询此用户所有信息）
         * */
        $activity=M("activity");
        $res=$activity->where("member_id=1")->select();//查询此用户购买所有活动
//        var_dump($activity);
//        die;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> bdfb9dd... y6
        $this->assign("res",$res1);
        $this->display("activity_person");
    }
    public function activity_start(){//开始活动页面列表
        $activity=M("activity");
        $time=time();
//        var_dump($time1);
//        die;
        $res=$activity->where("member_id=1 and activity_start_time <= $time and activity_end_time >= $time")->select();
        $res1=$this->activity($res);
        $this->assign("res",$res1);
        $this->display("activity_start");
    }
    public function activity_notstart(){//未开始活动页面列表
        $activity=M("activity");
        $time=time();
//        var_dump($time1);
//        die;
        $res=$activity->where("member_id=1 and activity_start_time > $time")->select();
        $res1=$this->activity($res);
        $this->assign("res",$res1);
        $this->display("activity_notstart");
    }
    public function activity_end(){//已结束活动页面列表
        $activity=M("activity");
        $time=time();
//        var_dump($time1);
//        die;
        $res=$activity->where("member_id=1 and activity_end_time < $time")->select();
//        var_dump($res);
//        die;
        $res1=$this->activity($res);
        $this->assign("res",$res1);
        $this->display("activity_end");
<<<<<<< HEAD
=======
>>>>>>> 0bc33c7... 公共部分继承
//        $sql="SELECT * from jxc_member WHERE member_id=1";
//        $info=
        $user=M("member");
        $info=$user->where('member_id=1')->select();//查询此用户所有信息
<<<<<<< HEAD

        $this->assign("res",$res);
        $this->assign("res",$user);
        $this->display("person_activity");
=======
        var_dump($info);
        die;
        $this->assign("res",$res);
        $this->assign("res",$user);
        $this->display("person_activity");
>>>>>>> 21c76c3... 公共部分继承
>>>>>>> 0bc33c7... 公共部分继承
=======

>>>>>>> bdfb9dd... y6
    }
}