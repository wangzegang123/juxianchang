<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
      $this->display("login");
    }
    public function login_index(){
        $this->display("login_index");
    }
}