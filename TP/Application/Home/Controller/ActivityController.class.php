<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
    public function public_part(){


            $this->display('public_part/public_part');
    }
    public function index(){
         if(IS_GET){
             $this->display('index/new_add_activity');
         }else{

            // $member_id=$_SESSION['mid'];//用户id从session中获取
             $member_id=1;//用户id从session中获取
             $money=$_POST['total_money']+800.00;
             $data['member_id']=$member_id;
             $data['activity_total_money']=$money;
             $data['activity_number']=$_POST['can_join'];
             $data['activity_theme']=$_POST['title'];
             $data['activity_start_time']=strtotime($_POST['ac_times']["start"]);//开始时间数组
             $data['activity_end_time']=strtotime($_POST['ac_times']["end"]);//开始时间数组
             $data['activity_pwd']=$_POST['pass_word'];
             $data['activity_whether_follow']=$_POST['gz_must'];
             $data['activity_follow_fodder']=$_POST['gz_url'];
             $data['activity_open_area']=$_POST['open_gps'];
             $data['activity_open_debug']=$_POST['open_gps_tiaoshi'];
             $data['activity_area_bg']=$_POST['gps_bg'];
             $data['activity_limit_area']=$_POST['must_location'];
             $data['activity_valid_time']=$_POST['success_time'];
             $data['activity_user_audit']=$_POST['status'];
             $data['activity_user_share']=$_POST['is_share'];
             $data['activity_pay_type']=$_POST['pay_type'];
             $data['activity_token']=$_POST['token'];
             $User = M("activity"); // 实例化User对象
             $interid=$User->add($data);//活动ID
             $data=$_POST['controls'];//活动数组
             $zz_data=$_POST['zz_controls'];//增强活动数组
             $option['activity_id']=$interid;
             $option['member_id']=$member_id;
             $option['function_option']=$this->activity_split_joint($data);
             $option['function_strong_option']=$this->activity_split_joint($zz_data);
             $User1 = M("activity_functions"); // 实例化User对象
             $inter=$User1->add($option);//功能id
             $User2 = M("activity_config"); // 实例化User对象
             $config['activity_id']=$interid;
             $int=$User2->add($config);


/*
             $arr=new \Home\Controller\WeixinController();
             $can="{$member_id}_{$interid}_{$inter}";
             $erweima=$arr->geturl($can,1);
             $filename='Public\activity_er_wei_ma\erweima_'.time().'.jpg';
             $arr->downQrcode($erweima,$filename);

             $path['function_qrcode_path']="12";
             $User1->where("function_id=$inter")->save($path);//添加下载二维码保存路径
             */
             if($int){
                 $this->redirect("activity_payments", array('total_money' => $money));
                /* $this->assign('total_money',total_money);
                 $this->display("Index/activity_payment");*/
             }
        }
    }


    public function activity_payments(){
            $total_money=$_GET['total_money'];
            $this->assign('total_money',$total_money);
            $this->display("Index/activity_payment");
    }




    public function activity_split_joint($arr){//活动功能拼接
        $res="";
        if(count($arr)){
            foreach($arr as $k=>$v){
                $res.=$v.",";
            }
            $res=substr($res,0,-1);
        }
        return $res;
    }




}