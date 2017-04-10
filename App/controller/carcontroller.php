<?php 
namespace App\Controller;
use Core\Framework;

class carController extends Framework {
	public function index(){
		$this->assign("method","car");
		$this->display('car/cart.html');
	}
	public function detailed(){
		$this->display('car/cartdetailed.html');
	}

}