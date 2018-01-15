<<<<<<< .mine
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
          $this->display();
    }
    public function activity($res){//根据用户查询活动的所有信息
        $Model = new \Think\Model();
        //计算参与人数,活动用户表使用 count()
        //$sql="select count('fans_id') as nums,f.activity_id from jxc_activity_fans as f where f.activity_id in(select a.activity_id from jxc_activity as a where a.member_id=1) group by f.activity_id";
        foreach($res as $k=>$v){
            // var_dump($v['activity_id']);
            $sql1="select  * from jxc_activity_fans where activity_id={$v['activity_id']}";
            $peo1=$Model->query($sql1);
            if(count($peo1)){
                $p1[$k]=$peo1;
            }else{
                $p1[$k]=null;
            }
            $res[$k]['num']=$num[$k]=count($p1[$k]);
        }
        //计算签到人数
        foreach($res as $kk=>$vv){
            // var_dump($v['activity_id']);
            $sql2="select  * from jxc_activity_fans where activity_id={$vv['activity_id']} and fans_sign=1";
            $peo2=$Model->query($sql2);
            if(count($peo2)){
                $p2[$kk]=$peo2;
            }else{
                $p2[$kk]=null;
            }
            $res[$kk]['sign']=count($p2[$kk]);
        }
        //计算上墙消息条数
        foreach($res as $k3=>$v3){
            // var_dump($v['activity_id']);
            $sql3="select  * from jxc_wall where activity_id={$v3['activity_id']} and wall_active=1";
            $peo3=$Model->query($sql3);

            if(count($peo3)){
                $p3[$k3]=$peo3;
            }else{
                $p3[$k3]=null;
            }
            $res[$k3]['wall']=count($p3[$k3]);
        }
        //计算霸屏上墙消息条数
        foreach($res as $k4=>$v4){
            // var_dump($v['activity_id']);
            $sql4="select  * from jxc_wall where activity_id={$v4['activity_id']} and wall_active=2";
            $peo4=$Model->query($sql4);
            if(count($peo4)){
                $p4[$k4]=$peo4;
            }else{
                $p4[$k4]=null;
            }
            $res[$k4]['screen']=count($p4[$k4]);
        }

        return $res;
    }
    public function activity_person(){//我的活动页面列表
        if(isset($_SESSION['mid'])){
            $mid=$_SESSION['mid'];
            $activity=M("activity");
            if(!empty($_GET)){
                $aname=$_GET['activity_name'];
                $mname=$_GET['member_name'];
                $sql="select a.* FROM jxc_activity as a INNER JOIN jxc_member as m ON a.member_id=m.member_id WHERE a.activity_theme LIKE '%$aname%' AND m.member_id=$mid AND m.member_name LIKE '%$mname%'";
                $Model = new \Think\Model();
                $res=$Model->query($sql);
                $res1=$this->activity($res);

            }else{
                $res=$activity->where("member_id=$mid")->select();
                $res1=$this->activity($res);

            }
            $this->assign("res",$res1);
            $this->display("activity_person");

        }else{
            $this->redirect("Login/login");
        }


    }
    public function activity_start(){//开始活动页面列表
        if(isset($_SESSION['mid'])){
            $mid=$_SESSION['mid'];
            $activity=M("activity");
            $time=time();
            if(!empty($_GET)){
                $aname=$_GET['activity_name'];
                $mname=$_GET['member_name'];
                $sql="select a.* FROM jxc_activity as a INNER JOIN jxc_member as m ON a.member_id=m.member_id WHERE a.activity_theme LIKE '%$aname%' AND m.member_id=$mid AND m.member_name LIKE '%$mname%' AND a.activity_start_time<='$time' and a.activity_end_time>='$time'";
                $Model = new \Think\Model();
                $res=$Model->query($sql);
                $res1=$this->activity($res);
            }else{
                $res=$activity->where("member_id=$mid and activity_start_time <= $time and activity_end_time >= $time")->select();
                $res1=$this->activity($res);
            }

            $this->assign("res",$res1);
            $this->display("activity_start");

        }else{
            $this->redirect("Login/login");
        }
    }
    public function activity_notstart(){//未开始活动页面列表
        if(isset($_SESSION['mid'])){
            $mid=$_SESSION['mid'];
            $activity=M("activity");
            $time=time();
            if(!empty($_GET)){
                $aname=$_GET['activity_name'];
                $mname=$_GET['member_name'];
                $sql="select a.* FROM jxc_activity as a INNER JOIN jxc_member as m ON a.member_id=m.member_id WHERE a.activity_theme LIKE '%$aname%' AND m.member_id=$mid AND m.member_name LIKE '%$mname%' AND a.activity_start_time>'$time'";
                $Model = new \Think\Model();
                $res=$Model->query($sql);
                $res1=$this->activity($res);
            }else{
                $res=$activity->where("member_id=$mid and activity_start_time > $time")->select();
                $res1=$this->activity($res);
            }

            $this->assign("res",$res1);
            $this->display("activity_notstart");

        }else{
            $this->redirect("Login/login");
        }
    }
    public function activity_end(){//已结束活动页面列表
        if(isset($_SESSION['mid'])){
            $mid=$_SESSION['mid'];
            $activity=M("activity");
            $time=time();
            if(!empty($_GET)){
                $aname=$_GET['activity_name'];
                $mname=$_GET['member_name'];
                $sql="select a.* FROM jxc_activity as a INNER JOIN jxc_member as m ON a.member_id=m.member_id WHERE a.activity_theme LIKE '%$aname%' AND m.member_id=$mid AND m.member_name LIKE '%$mname%' AND a.activity_end_time<'$time'";
                $Model = new \Think\Model();
                $res=$Model->query($sql);
                $res1=$this->activity($res);
            }else{
                $res=$activity->where("member_id=$mid and activity_end_time < $time")->select();
                $res1=$this->activity($res);
            }
            $this->assign("res",$res1);
            $this->display("activity_end");

        }else{
            $this->redirect("Login/login");
        }

    }
}
=======
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
              $this->display("index");
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
<<<<<<< .mine

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

=======
//        $sql="SELECT * from jxc_member WHERE member_id=1";
//        $info=
        $user=M("member");
        $info=$user->where('member_id=1')->select();//查询此用户所有信息
        var_dump($info);
        die;
        $this->assign("res",$res);
        $this->assign("res",$user);
        $this->display("person_activity");



























>>>>>>> .theirs
    }
   public function index_case(){
    $this->display();
}
function index_case1(){
    $this->display();
}
    function index_case2(){
        $this->display();
    }
    function index_case3(){
        $this->display();
    }
    function index_case4(){
        $this->display();
    }
    function demo(){
        $this->display();
    }
    function demo_index(){
        $this->display();
    }
}















































>>>>>>> .theirs
