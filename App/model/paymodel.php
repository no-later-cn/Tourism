<?php 
namespace App\model;
use Core\DBPDO;

class paymodel extends DBPDO{
	function getshoping($id){
		$con = $this->PDO->prepare('select * from car where id='.$id);
        $con->execute();
        return $con->fetchAll();
	}
}