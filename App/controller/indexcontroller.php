<?php
namespace App\controller;
use Core\Framework;
class indexController extends Framework{
    public function index(){
        $this->assign("method","index");
        $this->display("index/index.html");
    }
    public function heatPlay(){
        $this->assign('header_t',"当季热玩");
        $this->assign("icon_l",true);
        $this->assign('url','/index');
        $this->assign("icon_r",true);
        $this->assign('header_d',"HOT PLAY");
        $this->display("index/heatPlay.html");
    }
    public function heatPlay_details(){
        $this->assign('header_t',"景点详情");
        $this->assign("url","/index/".$_GET['sign']);
        $this->assign("icon_l",true);
        $this->assign("icon_r",true);
        $this->assign('header_d',"ATTRACTIONS DETAILS");
        $this->display("index/heatPlay_details.html");
    }
    public function heatSpots(){
        $this->assign("method","index");
        $this->assign('url','/index');
        $this->assign("header_t","热门景点");
        $this->assign("icon_l",true);
        $this->assign("header_d","HOT SPOTS");
        $this->display("index/heatSpots.html");
    }
    public function logdetails(){
        $this->assign("method","index");
        $this->display("index/logdetails.html");
    }
    public function travel(){
        $this->assign('header_t',"旅行攻略");
        $this->assign('url','/index');
        $this->assign("icon_l",true);
        $this->assign("icon_r",true);
        $this->assign('header_d',"TRAVEL STRATEGY");
        $this->display("index/travel.html");
    }

}