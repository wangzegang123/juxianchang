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

        }
    }

}