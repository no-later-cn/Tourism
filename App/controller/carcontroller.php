<?php
namespace App\Controller;
use Core\Framework;
use App\model\carmodel;
class carController extends Framework {
	public $car;
	function __construct(){
		require MODEL.'carmodel.php';
		$this->car = new carmodel();
	}
	public function index() {
		$this->assign("method", "car");
		$this->assign("header_t", "租车服务");
		$this->assign("header_d", "CAR RENTAL");
		$this->assign("icon_r", true);
		$this->assign("data",$this->car->getCar());
		$this->display('car/cart.html');
	}
	public function detailed() {
		$id = $_GET['carid'];
		$this->assign("header_t", "租车详情");
		$this->assign("data",$this->car->getdetails($id));
		$this->assign("header_d", "CAR DETAILED");
		$this->assign("icon_l", true);
		$this->assign("icon_r", true);
		$this->display('car/cartdetailed.html');
	}

}