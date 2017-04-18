<?php

namespace App\Controller;
header("content-type:text/html;charset=utf-8");
require MODEL . 'personalmodel.php';
use App\model\personalmodel;
use Core\Framework;

class personalController extends Framework
{
    public  function __construct()
    {
        if (!isset($_COOKIE['login'])) {
            $this->display('/personal/zonelogin.html');
        }
        $where = array(
            'uid' => 10086
        );
        $signinlist = new personalmodel();
        $this->assign('login', $signinlist->getAllsignin('userdata', $where)[0]);
    }

    /*----------------------主页-----------------------------*/
    public function index()
    {
        $this->assign("method", "personal");
        if (isset($_COOKIE['login'])) {
//            session_start();
//            $data = $_SESSION['login'];
            $this->display('/personal/zone.html');
        }
    }

    /*----------------------签到-----------------------------*/
    public function signin()
    {
        $sesson = array(
            'uid' => 10086
        );
        $signinlist = new personalmodel();
        $list = $signinlist->getAllsignin('signin', $sesson);
        return $this->json($list);
    }

    public function signin_add()
    {
        $signinlist = new personalmodel();

        $data = $_GET['signin_data'];
        $sesson = array(
            'uid' => 10086,
            'ctime' => date("Y-m-d")
        );
        $where = array(
            'day' => $data,
            'uid' => 10086,
            'ctime' => date("Y-m-d")
        );
        $list = $signinlist->getAllsignin('signin', $sesson);
        if (empty($list)) {
            $signinlist->setsignin('signin', $where);
            echo 'ok';
        } else {
            echo 'no';
        }
    }

    /*----------------------好友-----------------------------*/
    public function myfriend()
    {
        $this->display('/personal/myfriend.html');
    }

    /*----------------------个人设置-----------------------------*/
    public function myset()
    {
        $this->display('/personal/myset.html');
    }

    public function set_updata(){
        $type = explode('/', $_FILES['file']['type'])[1];
        $exec = md5(time().$_FILES['file']['name']) . '.' . $type;
        $data = 10086;
        $where=array(
            'avatar'=> '/Static/Imgs/'. $exec,
        );
        $whereb=array(
            'background'=> '/Static/Imgs/'. $exec,
        );
        if (!empty($_FILES['file'])) {
            $src = $_FILES['file']['tmp_name'];
            $dest = realpath('./') . '/Static/Imgs/' . $exec;
            move_uploaded_file($src, $dest);
            if (!empty($_POST['avatar'])) {
                unlink(realpath('./') . $_POST['avatar']);
            }
        } else {
            if(!empty( $_POST['avatar'])){
                $where['avatar'] = $_POST['avatar'];
            }
        }

        $list = new personalmodel();
        if( $list->setUpdata('userdata',$where,$data)){
            $this->redirect('/personal/myset');
        }
    }

    public function set_updata1(){
        $type = explode('/', $_FILES['file']['type'])[1];
        $exec = md5(time().$_FILES['file']['name']) . '.' . $type;
        $data = 10086;
        $where=array(
            'background'=> '/Static/Imgs/'. $exec,
        );
        if (!empty($_FILES['file'])) {
            $src = $_FILES['file']['tmp_name'];
            $dest = realpath('./') . '/Static/Imgs/' . $exec;
            move_uploaded_file($src, $dest);
            if (!empty($_POST['background'])) {
                unlink(realpath('./') . $_POST['background']);
            }
        } else {
            $where['background'] = $_POST['background'];
        }

        $list = new personalmodel();
        if( $list->setUpdata('userdata',$where,$data)){
            $this->redirect('/personal/myset');
        }
    }

    public function set_name(){
        $where =array(
            $_GET['name'] => $_GET['val']
        );
        $data = 10086;
        $list = new personalmodel();

        $list ->setUpdata('userdata',$where,$data);
    }

    /*----------------------系统设置-----------------------------*/
    public function setting()
    {
        $this->display('/personal/setting.html');

    }

    /*----------------------聊天-----------------------------*/
    public function coupon()
    {
        $this->display('/personal/coupon.html');
    }

    public function chat()
    {
        $this->display('/personal/chat-add.html');
    }
}