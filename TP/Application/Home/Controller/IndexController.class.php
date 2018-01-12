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
//        $sql="SELECT * from jxc_member WHERE member_id=1";
//        $info=
        $user=M("member");
        $info=$user->where('member_id=1')->select();//查询此用户所有信息
        var_dump($info);
        die;
        $this->assign("res",$res);
        $this->assign("res",$user);
        $this->display("person_activity");
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


}