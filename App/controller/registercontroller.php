<?php
namespace  App\controller;

use Core\Framework;

class registercontroller extends Framework{
    public function index(){
        $this->display('register/register.html');
    }
}
