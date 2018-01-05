<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "gfdgfd";
    }
    public function top(){
        $this->display("public/top");
    }
}