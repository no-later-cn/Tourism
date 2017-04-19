<?php 
namespace App\Controller;
use Core\Framework;
use App\model\paymodel;
class payController extends Framework {
	public $pay;
	function  __construct(){
		require MODEL.'paymodel.php';
		$this->pay = new paymodel();
	}
	public function order(){
		$id = $_GET['payid'];
		$data = $this->pay->getshoping($id);
		// $data[0]["statr_time"] = '出行日期：'.$data[0]["statr_time"];
		$data[0]["statr_time"] = '出行日期：2017-02-06';
		$data[0]["duration"] = '租用天数：'.$data[0]["duration"].'天';
		$data[0]["place"] = '取车地点：'.$data[0]["place"];
		$this->assign('data',$data);
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


