<?php

namespace App\model;

use Core\DBPDO;

class personalmodel extends DBPDO
{
        public function __construct()
        {
            parent::__construct();
        }
        //-------------------获取--------------------
        public function getAllsignin($sql,$id){
            $sql ='select * from '.$sql.' where ';
            foreach ($id as $key => $value) {
                $sql .=$key .' = '. $value.' and ';
            }
            $sql = substr($sql, 0, -4);
            $con = $this->PDO->prepare($sql);
            for ($i = 1; $i < count($id)+1; $i++) {
                $con->bindValue($i, array_values($id)[$i - 1]);
            }
            $con->execute();
            return $con->fetchAll();
        }
      //-------------------签到添加--------------------
        public function setsignin($table,$where){
//            c($where);
            return $this->insert($table,$where);
        }
        //-------------------更新--------------------
        public function setUpdata($table, $where, $id)
        {
            $data = array(
                'uid' => $id
            );
          return  $this->update($table, $where, $data);
        }


}