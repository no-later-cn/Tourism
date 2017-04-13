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
    public function back(){
        $this->display('pay/back.html');
    }
    public function paypass(){
        $this->display('pay/paypass.html');
    }

}


