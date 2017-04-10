<?php
namespace App\Controller;
use App\model\usermodel;
use Core\Framework;

class loginController extends Framework {
    public  function index(){
      $this->display('login/index.html');
    }
    public function login(){
        if(isset($_COOKIE['login'])){
            $this->session('login',true);
            $this->redirect('/index');
        }else{
            $this->display('login/login.html');
        }
    }
    public function logout(){
        session_start();
        unset ($_SESSION['login']);
        setcookie('login','',time()+600);
        $this->redirect('/login');
    }
    public function check(){
        $account=$_POST['user'];
        $password=md5($_POST['password']);
        require MODEL.'usermodel.php';
        $m=new usermodel();
        $con=$m->user($account,$password);
        if($con){
              $this->session('login',true);
            if (isset($_POST['check'])){
                setcookie('login','true',time()+600000,'/');
            }
            $this->redirect('/login/wifi');
            echo 'ok';
        }else{
            $this->redirect('/login/login');
        };
    }
    public function wifi(){
        $this->display('login/wifi.html');
    }
    public function qq(){
        $this->display('login/qq.html');

    }
    public function wechat(){
        $this->display('login/wechat.html');

    }
    public function twitter(){
        $this->display('login/twitter.html');

    }
}