<?php
namespace Home\Controller;
use Think\Controller;
class FrontController extends Controller {
    public function index(){
          echo "1111";
    }
    public function game_demo(){
        $this->display('game_demo');
    }

}