<?php
namespace App\controller;


use Core\Framework;

class indexController extends Framework
{


    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            $this->redirect('/login');
        }
    }
    public function index(){
        $this->display('index/index.html');

    }
}