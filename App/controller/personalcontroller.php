<?php
namespace App\Controller;

use Core\Framework;

class personalController extends Framework {
    public function index(){
        $this->assign("method","personal");
        $this->display('personal/zone.html');
    }
    public function myfriend(){
        $this->display('personal/myfriend.html');
    }
    public function myset(){
        $this->display('/personal/myset.html');
    }
    public function setting(){
        $this->display('/personal/setting.html');

    }
    public function coupon(){
        $this->display('/personal/coupon.html');
    }
    public function chat(){
         $this->display('/personal/chat-add.html');
    }
}