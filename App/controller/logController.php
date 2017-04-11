<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/10
 * Time: 11:20
 */
namespace App\Controller;

use Core\Framework;

class logController extends Framework{
    //网站首页
    public function index(){
        $this->display('index/index.html');
    }
    //旅行日志
    public function Travellog(){
        $this->assign("method","logdetails");
        $this->display('log/Travellog.html');
    }
    //我的日志
    public function my(){
        $this->assign("method","logdetails");
        $this->display('log/me.html');
    }
    //日志详情
    public  function  Logdetails(){
        $this->display('log/Logdetails.html');
    }
    //日志发布
    public function publish(){
        $this->display('log/Development.html');
    }
  // 最新动态
    public function Personaljournal(){
        $this->display('log/Personaljournal.html');
    }

}