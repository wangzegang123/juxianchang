<?php
namespace Home\Controller;
use Think\Controller;
use Think\Db;
use \think\Request;
use think\Session;
class AorderController extends Controller
{
    public function activity_order()//全部订单
    {
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        /*$activity=$Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money from jxc_activity as a join jxc_activity_functions as f on a.activity_id=f.activity_id where a.member_id=1");*/
        $activity = $Model->query("select f.function_option,o.order_pay,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE a.member_id=1");
        /*var_dump($activity);
        die;*/
        $this->assign('activity_order', $activity);
        $this->display('index/activity_order');
    }


    public function order_seek()
    {
        $activity_name = $_GET['activity_name'];
        $arr = $_GET['type'];
        if ($activity_name == "") {
            echo "<script>history.go(-1);</script>";
        } else {
            $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
            if ($arr == "arr") {//搜索全部活动
                $activity = $Model->query("select f.function_option,o.order_pay,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE a.member_id=1 AND a.activity_theme='{$activity_name}'");
                $this->assign('activity_order', $activity);
                $this->display('index/activity_order');
            } elseif ($arr == "nopay") {//搜索未支付
                $order_pay = $Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE o.order_pay=0 AND o.member_id=1 AND a.activity_theme='{$activity_name}'");
                $this->assign('activity_order_nopay', $order_pay);
                $this->display('index/activity_order_nopay');
            } else {
                $order_pay = $Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE o.order_pay=1 AND o.member_id=1 AND a.activity_theme='{$activity_name}'");
                $this->assign('activity_order_pay', $order_pay);
                $this->display('index/activity_order_pay');
            }

        }
    }


    public function activity_order_nopay()//待付款订单
    {
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $order_pay = $Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE o.order_pay=0 AND o.member_id=1");
        /*var_dump($order_pay);
        die;*/
        /*$activity=$Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money from jxc_activity as a join jxc_activity_function as f on a.activity_id=f.activity_id where a.member_id=1");*/
        $this->assign('activity_order_nopay', $order_pay);
        $this->display('index/activity_order_nopay');
    }


    public function activity_order_pay()//订单已付款
    {
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $order_pay = $Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money FROM jxc_activity_order as o JOIN jxc_activity as a on o.activity_id=a.activity_id JOIN jxc_activity_functions as f on f.activity_id=o.activity_id WHERE o.order_pay=1 AND o.member_id=1");
        /*var_dump($order_pay);
        die;*/
        /*$activity=$Model->query("select f.function_option,a.activity_theme,a.activity_start_time,a.activity_end_time,a.activity_total_money from jxc_activity as a join jxc_activity_function as f on a.activity_id=f.activity_id where a.member_id=1");*/
        $this->assign('activity_order_pay', $order_pay);
        $this->display('index/activity_order_pay');
    }

    public function activity_order_redbag()
    {//红包订单
        $this->display('index/activity_order_redbag');
    }

    public function activity_order_redbag_nopay()
    {//红包未付款
        $this->display('index/activity_order_redbag_nopay');
    }

    public function activity_order_redbag_pay()
    {//红包已付款
        $this->display('index/activity_order_redbag_pay');
    }

    //public function activity_fans_okaudit(Request $request){//已审核粉丝
    //$activity_id=$request;
    public function activity_fans_okaudit()
    {//已审核粉丝
        $fans = M('activity_fans');
        $fans = $fans->where("activity_id=1 AND fans_check=1")->getField('fans_name,fans_header,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
        $this->assign("fans", $fans);
        $this->display('index/activity_fans_okaudit');
    }

    public function fans_award()//是否允许中奖
    {
        if ($_POST) {
            $fans_id = $_POST['fans_id'];
            $activity_id = $_POST['activity_id'];
            $fans_award = $_POST['fans_award'];
            /*var_dump($fans_id,$activity_id,$fans_award);
            die;*/
            $fans = M('activity_fans');

            if ($fans_award == 1) {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_award', 0);
                echo "禁止中奖设置成功";
            } else {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_award', 1);
                echo "允许中奖设置成功";
            }
        }
    }

    public function fans_blacklist()
    {//加入移除黑名单
        if (!empty($_POST)) {
            $fans_id = $_POST['fans_id'];
            $activity_id = $_POST['activity_id'];
            $fans_blacklist = $_POST['fans_blacklist'];
            $fans = M('activity_fans');
            if ($fans_blacklist == 1) {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_blacklist', 0);
                echo "已移除黑名单";
            } else {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_blacklist', 1);
                echo "加入黑名单成功";
            }
        }
    }

    public function fans_admin()
    {//加入移除管理员
        if ($_POST) {
            $fans_id = $_POST['fans_id'];
            $activity_id = $_POST['activity_id'];
            $fans_admin = $_POST['fans_admin'];
            $fans = M('activity_fans');
            if ($fans_admin == 1) {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_admin', 0);
                echo "已移除管理员";
            } else {
                $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_admin', 1);
                echo "加入管理员成功";
            }
        }
    }

    public function fans_del()
    {//进入删除粉丝页面
        if ($_POST) {
            $fans_id = $_POST['fans_id'];
            $activity_id = $_POST['activity_id'];
            /*echo $fans_id;
            die;*/
            $fans = M('activity_fans');
            $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->delete();
            echo "粉丝已删除";
        }
    }

    public function fans_check()
    {//审核用户
        if ($_POST) {
            $fans_id = $_POST['fans_id'];
            $activity_id = $_POST['activity_id'];
            $fans = M('activity_fans');
            $fans = $fans->where("fans_id=$fans_id AND activity_id=$activity_id")->setField('fans_check', 1);
            echo "审核成功";
        }
    }

    public function activity_fans_redact()
    {//进入编辑粉丝页面

        $fans_id = $_GET['fans_id'];
        $fans = M('activity_fans');
        $fans_redact = $fans->where("fans_id=$fans_id")->getField("fans_id,fans_name,fans_header,fans_phone,fans_sex,fans_blacklist,fans_winning");
        $this->assign('fans_redact', $fans_redact);
        $this->display('index/activity_fans_redact');
    }

    public function fans_redact()
    {//更新粉丝信息
        $fans_id = $_POST['fans_id'];
        $date['fans_winning'] = $_POST['winning'];
        $date['fans_sex'] = $_POST['sex'];
        $date['fans_blacklist'] = $_POST['fans_blacklist'];
        $date['fans_phone'] = $_POST['phone'];
        $date['fans_name'] = $_POST['fans_name'];
        $date['fans_header'] = $_FILES['file'];
        /*var_dump($date['fans_header']);
        die;*/
        $fan = M("activity_fans");

        if (!empty($date['fans_name'])) {
            if (!empty($date['fans_phone'])) {
                if($date['fans_header']['name']==""){
                    $fans = $fan->add($date);
                    $this->redirect('Aorder/activity_fans_okaudit');
                }else {
                    if ($date['fans_header']['type'] == "image/jpeg" || $date['fans_header']['type'] == "image/png" || $date['fans_header']['type'] == "image/jpg") {
                        if ($_FILES['file']) {
                            $config = array(
                                'maxSize' => 3145728,
                                'rootPath' => "D:/php/code/juxianchang/TP/Public/Home/images/fans_image/",
                                'savePath' => '',
                                'exts' => array('jpg', 'gif', 'png', 'jpeg'),
                                'autoSub' => false,
                            );
                            $upload = new \Think\Upload($config);// 实例化上传类
                            $info = $upload->upload();
                            $date['fans_header'] = $info['file']['savename'];
                            if ($info) {// 上传成功
                                $fan->where("fans_id=$fans_id")->save($date);
                                $this->redirect('Aorder/activity_fans_okaudit');
                            } else {
                                $fan->where("fans_id=$fans_id")->save($date);
                                $this->redirect('Aorder/activity_fans_okaudit');
                            }
                        } else {
                            $fan->where("fans_id=$fans_id")->save($date);
                            $this->redirect('Aorder/activity_fans_okaudit');
                        }
                    } else {
                        echo "<script>alert('不是图片格式或者图片过大，请选择小于3M以下的图片');history.go(-1);</script>";
                    }
                }
            } else {
                echo "<script>alert('请输入手机号码');history.go(-1);</script>";
            }
        } else {
            //echo "<script>alert('修改失败');history.go(-2);</script>";
            echo "<script>alert('请输入昵称');history.go(-1);</script>";
        }

    }
/*else {
echo "<script>alert('修改失败');history.go(-2);</script>";
}*/


        /*$aa = $fan->where("fans_id=$fans_id")->save($date);
        if ($aa) {
            $this->redirect('Aorder/activity_fans_okaudit');
        }*/




    public function activity_fans_noaudit()
    {//未审核
        $fans = M('activity_fans');
        $fans = $fans->where("activity_id=1 AND fans_check=0")->getField('fans_name,fans_header,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
        /*var_dump($fans);
        die;*/
        $this->assign("noaudit", $fans);
        $this->display('index/activity_fans_noaudit');
    }

    public function activity_addfans()
    {//添加粉丝
        if ($_POST) {
            $fa['fans_name'] = $_POST['fans_name'];
            $fa['fans_sex'] = $_POST['fans_sex'];
            $fa['fans_phone'] = $_POST['fans_phone'];
            $fa['fans_award'] = $_POST['fans_award'];
            $fa['fans_blacklist'] = $_POST['fans_blacklist'];
            $fa['fans_sige'] = $_POST['fans_sign'];
            $fa['fans_money'] = $_POST['fans_money'];
            $fa['fans_check']=1;
            $fa['fans_time'] = time();
            $fa['fans_header'] = $_FILES['file'];
            /*var_dump($fa['fans_header']);
            die;*/
  /*          if(preg_match("/^1[34578]{1}\d{9}$/",$fa['fans_phone'])){
                echo "是";
            }else{
                echo "不是";
            }
die;*/
            $fa['activity_id'] = 1;//后期获取session
            $fans = M("activity_fans");
            if(!empty($fa['fans_name'])){
                if(!empty($fa['fans_phone'])){
                    if(preg_match("/^1[34578]{1}\d{9}$/",$fa['fans_phone'])) {
                        if ($fa['fans_header']['name'] == "") {
                            $fans = $fans->add($fa);
                            $this->redirect('Aorder/activity_fans_okaudit');
                        } else {

                            if ($fa['fans_header']['type'] == "image/jpeg" || $fa['fans_header']['type'] == "image/png" || $fa['fans_header']['type'] == "image/jpg") {
                                if ($_FILES['file']) {
                                    $config = array(
                                        'maxSize' => 3145728,
                                        'rootPath' => "D:/php/code/juxianchang/TP/Public/Home/images/fans_image/",
                                        'savePath' => '',
                                        'exts' => array('jpg', 'gif', 'png', 'jpeg'),
                                        'autoSub' => false,
                                    );
                                    $upload = new \Think\Upload($config);// 实例化上传类
                                    $info = $upload->upload();
                                    $fa['fans_header'] = $info['file']['savename'];
                                    if ($info) {// 上传成功
                                        $fans = $fans->add($fa);
                                        $this->redirect('Aorder/activity_fans_okaudit');
                                    } else {
                                        $fans = $fans->add($fa);
                                        $this->redirect('Aorder/activity_fans_okaudit');
                                    }
                                } else {
                                    $fans = $fans->add($fa);
                                    $this->redirect('Aorder/activity_fans_okaudit');
                                }
                            } else {
                                echo "<script>alert('不是图片格式或者图片过大，请选择小于3M以下的图片');history.go(-1);</script>";
                            }
                        }
                    }else{
                        echo "<script>alert('输入的手机号码有误');history.go(-1);</script>";
                    }
             }else{
                     echo "<script>alert('请输入手机号码');history.go(-1);</script>";
                 }
             }else{
                 //echo "<script>alert('修改失败');history.go(-2);</script>";
                 echo "<script>alert('请输入昵称');history.go(-1);</script>";
             }
        } else {
            $this->display('index/activity_addfans');
        }

    }

    public function activity_oraddfans()
    {//批量添加粉丝
        $this->display('index/activity_oraddfans');
    }

    public function exportExcel($expTitle, $expCellName, $expTableData)
    {//用户数据导出配置
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $expTitle . date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);//4
        $dataNum = count($expTableData);
        vendor("PHPExcel.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
        //设置宽度
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(17);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
        //设置行高
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
        $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        //设置字体样式
        $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10); //默认字体大小
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16)->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2:J2')->getFont()->setBold(true); //粗体
        //设置垂直、水平居中
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()
            ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:J2')->getAlignment()
            ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //设置边框
        $objPHPExcel->getActiveSheet()->getStyle('A2:J2')->getBorders()->getAllBorders()
            ->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
//'A1:D1'
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle . ' 导出时间:' . date('Y-m-d H:i:s'));
        for ($i = 0; $i < $cellNum; $i++) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i][1]);
        }
        for ($i = 0; $i < $dataNum; $i++) {
            for ($j = 0; $j < $cellNum; $j++) {
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j] . ($i + 3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    public function okauditexcel()
    {//已审核用户数据导出
        $name = "已审核粉丝";
        $name1 = array(
            array('fans_name', '名字'),
            array('fans_sex', '性别'),
            array('fans_phone', '手机号'),
            array('fans_admin', '是否为管理员'),
            array('fans_winning', '是否参与抽奖'),
            array('fans_sign', '是否签到'),
            array('fans_check', '审核是否通过'),
            array('fans_time', '加入时间'),
            array('fans_money', '余额'),
            array('fans_header', '头像'),
        );
        $res = M('activity_fans');
        $Model = new \Think\Model();
        $sql = "select fans_name,fans_sex,fans_phone,fans_admin,fans_winning,fans_sign,fans_check,fans_time,fans_money,fans_header from jxc_activity_fans where fans_check=1";
//        $res1=$res->field('fans_name','fans_sex','fans_phone','fans_admin','fans_winning','fans_sign','fans_status','fans_time','fans_money');
        $res1 = $Model->query($sql);
//        var_dump($res1);
//        die;
        foreach ($res1 as $k => $v) {
            if ($v['fans_sign'] == 0) {
                $res1[$k]['fans_sign'] = "未签到";
            } else {
                $res1[$k]['fans_sign'] = "签到";
            }
            if ($v['fans_sex'] == 1) {
                $res1[$k]['fans_sex'] = "男";
            } elseif ($v['fans_sex'] == 2) {
                $res1[$k]['fans_sex'] = "女";
            } else {
                $res1[$k]['fans_sex'] = "保密";
            }
            if ($v['fans_admin'] == 1) {
                $res1[$k]['fans_admin'] = "管理员";
            } else {
                $res1[$k]['fans_admin'] = "不是管理员";
            }
            if ($v['fans_winning'] == 1) {
                $res1[$k]['fans_winning'] = "参与抽奖";
            } else {
                $res1[$k]['fans_winning'] = "不参与抽奖";
            }
            if ($v['fans_check'] == 1) {
                $res1[$k]['fans_check'] = "已通过审核";
            } else {
                $res1[$k]['fans_check'] = "未通过审核";
            }
            $res1[$k]['fans_time'] = date("Y-m-d H:i:s", $v['fans_time']);
        }
        $this->exportExcel($name, $name1, $res1);
    }

    public function noauditexcel()
    {//未审核用户数据导出
        $name = "未审核粉丝";
        $name1 = array(
            array('fans_name', '名字'),
            array('fans_sex', '性别'),
            array('fans_phone', '手机号'),
            array('fans_admin', '是否为管理员'),
            array('fans_winning', '是否参与抽奖'),
            array('fans_sign', '是否签到'),
            array('fans_check', '审核是否通过'),
            array('fans_time', '加入时间'),
            array('fans_money', '余额'),
            array('fans_header', '头像'),
        );
        $res = M('activity_fans');
        $Model = new \Think\Model();
        $sql = "select fans_name,fans_sex,fans_phone,fans_admin,fans_winning,fans_sign,fans_check,fans_time,fans_money,fans_header from jxc_activity_fans where fans_check=0";
//        $res1=$res->field('fans_name','fans_sex','fans_phone','fans_admin','fans_winning','fans_sign','fans_status','fans_time','fans_money');
        $res1 = $Model->query($sql);
//        var_dump($res1);
//        die;
        foreach ($res1 as $k => $v) {
            if ($v['fans_sign'] == 0) {
                $res1[$k]['fans_sign'] = "未签到";
            } else {
                $res1[$k]['fans_sign'] = "签到";
            }
            if ($v['fans_sex'] == 1) {
                $res1[$k]['fans_sex'] = "男";
            } elseif ($v['fans_sex'] == 2) {
                $res1[$k]['fans_sex'] = "女";
            } else {
                $res1[$k]['fans_sex'] = "保密";
            }
            if ($v['fans_admin'] == 1) {
                $res1[$k]['fans_admin'] = "管理员";
            } else {
                $res1[$k]['fans_admin'] = "不是管理员";
            }
            if ($v['fans_winning'] == 1) {
                $res1[$k]['fans_winning'] = "参与抽奖";
            } else {
                $res1[$k]['fans_winning'] = "不参与抽奖";
            }
            if ($v['fans_check'] == 1) {
                $res1[$k]['fans_check'] = "已通过审核";
            } else {
                $res1[$k]['fans_check'] = "未通过审核";
            }
            $res1[$k]['fans_time'] = date("Y-m-d H:i:s", $v['fans_time']);
        }
        $this->exportExcel($name, $name1, $res1);
    }

    public function fans_lead()
    {//用户数据导入
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('xls', 'csv', 'xlsx');
        $upload->rootPath = './Public';
        $upload->savePath = '/excel/';
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        } else {
            $filename = './Public' . $info['file']['savepath'] . $info['file']['savename'];
            import("Org.Yufan.ExcelReader");
            $ExcelReader = new \ExcelReader();
            $arr = $ExcelReader->reader_excel($filename);
            $arr = array_slice($arr, 1);
            foreach ($arr as $k => $v) {
                $data['activity_id'] = 1;//后期经session获取
                $data['fans_name'] = $v['0'];
                $data['fans_sex'] = $v['1'];
                $data['fans_phone'] = $v['2'];
                $data['fans_admin'] = $v['3'];
                $data['fans_winning'] = $v['4'];
                $data['fans_sign'] = $v['5'];
                $data['fans_check'] = $v['6'];
                $data['fans_time'] = strtotime($v['7']);
                $data['fans_money'] = $v['8'];
                $data['fans_header'] = $v['9'];
                if ($data['fans_sex'] == "男") {
                    $data['fans_sex'] = 1;
                } elseif ($data['fans_sex'] == "女") {
                    $data['fans_sex'] = 2;
                } else {
                    $data['fans_sex'] = 3;
                }
                if ($data['fans_admin'] == "管理员") {
                    $data['fans_admin'] = 1;
                } else {
                    $data['fans_admin'] = 0;
                }
                if ($data['fans_winning'] == "参与中奖") {
                    $data['fans_winning'] = 1;
                } else {
                    $data['fans_winning'] = 0;
                }
                if ($data['fans_sign'] == "签到") {
                    $data['fans_sign'] = 1;
                } else {
                    $data['fans_sign'] = 0;
                }
                if ($data['fans_check'] == "未通过审核") {
                    $data['fans_check'] = 0;
                } else {
                    $data['fans_check'] = 1;
                }
                M('activity_fans')->add($data);
            }
            $this->redirect("Aorder/activity_fans_okaudit");
        }
    }

    public function fans_seek()
    {

        $activity_id = 1;
        $fans_name = $_GET['fans_name'];
        /*$fans_name=like$fans_name*/
        $fans_phone = $_GET['fans_phone'];
        $fans_type = $_GET['type'];
        if (!empty($fans_name)) {//如果名字不为空，
            if (!empty($fans_phone)) {//电话号码也不为空，则继续查询。
                if ($fans_type == "ok") {//如果是从已审核页面传入，则查询已审核用户
                    $fans = M("activity_fans");
                    $fans_ok = $fans->where("fans_name='{$fans_name}' AND fans_phone='$fans_phone' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                    $this->assign("fans", $fans_ok);
                    $this->display('index/activity_fans_okaudit');
                } elseif ($fans_type == "no") {//如果是从未审核页面传入，则查询未审核用户
                    $fans = M("activity_fans");
                    $fans_ok = $fans->where("fans_name='{$fans_name}' AND fans_check='0' AND fans_phone='$fans_phone' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                    $this->assign("noaudit", $fans_ok);
                    $this->display('index/activity_fans_noaudit');
                }
            } else {//如果号码为空，则以名字查询
                if ($fans_type == "ok") {
                    $fans = M("activity_fans");
                    $fans_ok = $fans->where("fans_name='{$fans_name}' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                    $this->assign("fans", $fans_ok);
                    $this->display('index/activity_fans_okaudit');
                } elseif ($fans_type == "no") {
                    $fans = M("activity_fans");
                    $fans_ok = $fans->where("fans_name='{$fans_name}' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                    $this->assign("noaudit", $fans_ok);
                    $this->display('index/activity_fans_noaudit');
                }
            }
        } elseif (!empty($fans_phone)) {//如果名字为空，则按号码查询
            if ($fans_type == "ok") {
                $fans = M("activity_fans");
                $fans_ok = $fans->where("fans_phone='$fans_phone' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                $this->assign("fans", $fans_ok);
                $this->display('index/activity_fans_okaudit');
            } elseif ($fans_type == "no") {
                $fans = M("activity_fans");
                $fans_ok = $fans->where("fans_phone='$fans_phone' AND activity_id='{$activity_id}'")->getField('fans_name,fans_sex,fans_admin,fans_blacklist,fans_winning,fans_sign,fans_time,fans_phone,fans_money,fans_check,fans_default,fans_id,activity_id,fans_award');
                $this->assign("noaudit", $fans_ok);
                $this->display('index/activity_fans_noaudit');
            }
        } else {
            echo "<script>history.go(-1);</script>";//什么都没有传，则返回上一个页面
        }
    }

    public function fans_adddel()
    {//删除全部粉丝
        $id = $_GET['id'];
        if ($id == "ok") {//全部删除已审核用户
            $fans = M('activity_fans');
            $fans_del = $fans->where("fans_check=1")->delete();
            echo "<script>alert('删除成功');</script>";
            $this->redirect("Aorder/activity_fans_okaudit");
        } else {//全部删除已审核用户
            $fans = M('activity_fans');
            $fans_del = $fans->where("fans_check=0")->delete();
            echo "<script>alert('删除成功');</script>";
            $this->redirect("Aorder/activity_fans_noaudit");
        }
    }

    /*public function fans_images()

    {//上传图片
         if(!empty($_FILES['Task6']['tmp_name'])){
    $rootPath=C("UPLOADROOT");

    $config = array(
        'maxSize'    =>    3145728,
        'rootPath'   =>    $rootPath,
        'savePath'   =>    '',
        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
        'autoSub'    =>false,
    );
    $upload = new \Think\Upload($config);// 实例化上传类
    $info   =   $upload->upload();
    var_dump($info);
    die;
    if($info) {// 上传成功
        $infoname=$info['Task6']['savename'];
        $data['user_headpic']=$infoname;
    }
}else{
    $data['user_headpic']=$_POST['filepic'];
}

        echo "1111";
        var_dump($_FILES['image']);
        die;
        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    "D:/php/code/juxianchang/TP/Public/Home/images/fans_image/",
            'savePath'   =>    '',
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $info = $upload->upload();
        var_dump($info);
        die;
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $this->success('上传成功！');
        }
    }*/

    public function three()//3d签到
    {
        $this->display("index/3Dsign");
    }
}