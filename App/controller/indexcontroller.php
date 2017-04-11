<?php
namespace App\controller;
use Core\Framework;
class indexController extends Framework{
    public function index(){
        $this->assign("method","index");
        $this->display("index/index.html");
    }
    public function heatPlay(){
        $this->display("index/heatPlay.html");
    }
    public function heatPlay_details(){
        $this->display("index/heatPlay_details.html");
    }
    public function heatSpots(){
        $this->assign("method","index");
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
        $this->display("index/travel.html");
    }

}