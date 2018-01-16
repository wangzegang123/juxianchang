<?php
namespace Home\Controller;
use Think\Controller;

class SignController extends Controller{
    public function Sign(){
        $this->display("Sign/sign");
    }
    public function Logo(){
        $this->display("Sign/Logo");
    }
    public function shake(){
        $this->display("Sign/shake");
    }
    public function vote(){
        $this->display("Sign/vote");
    }
    public function Invitation(){
        $this->display("Sign/Invitation");
    }
    public function Ticket(){
        $this->display("Sign/E-ticket");
    }
    public function Live(){
        $this->display("Sign/Live");
    }
}