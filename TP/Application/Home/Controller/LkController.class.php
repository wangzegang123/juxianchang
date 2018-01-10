<?php
namespace Home\Controller;
use Think\Controller;
class LkController extends Controller {
    public function details(){

         $this->display('Home/details');
    }
    public function chongzhi(){
        if(IS_POST){
//            print_r($_SESSION['mid']);
//            die;
            $data['money']=$_POST['money'];
            $date['shouxufei']=$data['money']*0.05;
            $date['jine']=$data['money'];
            $date['zongjine']=$date['jine']+$date['shouxufei'];
            $date['addtime']=time();
//            $res=M('mone');
            $res1=M('pay');
            $lk =$res1->add($date);
//           =$res->add($data);
            if($lk){
//                $this->success('Home/chongzhi');
                echo "<script>alert('充值成功');location='chongzhi'</script>";
            }else{
                $this->display('Home/chongzhi');
            }
        }
        $res2=M('pay');
        $lk=$res2->join('jxc_status on jxc_pay.status_id=jxc_status.id')->select();
//        print_r($lk);
//        die;
        $this->assign('lk',$lk);
        $this->display('Home/chongzhi');
    }
    public function shezhi(){
        if(IS_POST){
            $k=M('shezhi');
            $data['shezhi_zhifubao']=$_POST['zhifubao'];
            $data['shezhi_username']=$_POST['name'];
            $lk=$k->add($data);
            if($lk){
                echo "<script>alert('设置成功');location='shezhi'</script>";
            }else{
                echo "<script>alert('设置失败');location='shezhi'</script>";
            }
        }
        $this->display('Home/shezhi');
    }
    public function zhyue(){
        $this->display('Home/zhyue');
    }
    public function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $expTitle.date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);//4
        $dataNum = count($expTableData);
        vendor("PHPExcel.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        //设置宽度
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        //设置行高
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
        $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        //设置字体样式
        $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10); //默认字体大小
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16)->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getFont()->setBold(true); //粗体
        //设置垂直、水平居中
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()
            ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getAlignment()
            ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //设置边框
        $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getBorders()->getAllBorders()
            ->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
//'A1:D1'
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.' 导出时间:'.date('Y-m-d H:i:s'));
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]);
        }
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
    public function export(){//导出Excel
        $name="测试";
        $shujuku=array(
            array('shezhi_id','测试id'),
            array('shezhi_zhifubao','支付宝'),
            array('shezhi_username','姓名')
            );
        $res=M('shezhi');
        $chaxun= $res->Field('shezhi_id,shezhi_zhifubao,shezhi_username')->select();
    $this->exportExcel($name,$shujuku,$chaxun);
    }
    public function order(){
        $this->display('Home/order');
    }
}