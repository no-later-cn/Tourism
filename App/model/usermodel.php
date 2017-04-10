<?php
namespace App\model;
use Core\DBPDO;
class usermodel extends DBPDO {
    public function __construct()
    {
        parent::__construct();
    }
    public function user($account,$password){
        $r= $this->fetchAll('select * from user');
        if($account===$r[0]['account']&&$password===$r[0]['password']){
            return true;
        }else{
            return false;

        }
    }

}
