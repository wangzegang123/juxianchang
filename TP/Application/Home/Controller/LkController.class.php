<?php
namespace Home\Controller;
use Think\Controller;
class LkController extends Controller {
    public function details(){

         $this->display('Home/details');
    }
    public function chongzhi(){
        $this->display('Home/chongzhi');
    }
    public function shezhi(){
        $this->display('Home/shezhi');
    }
    public function zhyue(){
        $this->display('Home/zhyue');
    }
}