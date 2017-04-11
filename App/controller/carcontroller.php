<?php
namespace App\Controller;
use Core\Framework;

class carController extends Framework {
	public function index() {
		$this->assign("method", "car");
		$this->assign("header_t", "租车服务");
		$this->assign("header_d", "CAR RENTAL");
		$this->assign("icon_r", true);
		$this->display('car/cart.html');
	}
	public function detailed() {
		$this->assign("header_t", "租车详情");
		$this->assign("header_d", "CAR DETAILED");
		$this->assign("icon_l", true);
		$this->assign("icon_r", true);
		$this->display('car/cartdetailed.html');
	}

}