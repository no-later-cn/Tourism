<?php 
namespace App\Controller;
use Core\Framework;

class payController extends Framework {
	public function order(){
		$this->display('pay/order.html');
	}
	public function pay(){
		$this->display('pay/pay.html');
	}

}


