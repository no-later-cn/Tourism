<?php
namespace App\controller;

use Core\Framework;

class splashcontroller extends Framework {
    public function index(){
        setcookie('login','true',time()+600000,'/');
        $this->display("splash/splash.html");

    }
}