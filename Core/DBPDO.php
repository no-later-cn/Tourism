<?php
namespace Core;
//因为这个文件是引用文件，所以需要use，后使用PDB就不用  new \PDO了
use PDO;
use PDOException;

class DBPDO {
	public $PDO;
	public function __construct() {
//        创建连接数据库的PDO实例
		$dsn = 'mysql:host=sqld.duapp.com;dbname=zflFkPGZQPzcSAAoHxqI;port=4050;charset=utf8';
		//连接
		$options = array(
			//默认是PDO::ERRMODE_SILENT, 0, (忽略错误模式)
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			// 默认是PDO::FETCH_BOTH, 4
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		);
		try {
			$this->PDO = new PDO($dsn, '12907664add34ed185274d56f3b303f8', '8beebc9975ef4d87853ffb4b9c214a72', $options);

		} catch (PDOException $e) {
			die("数据连接失败：" . $e->getMessage());
		}
	}
//        全部查询数据
	public function fetchAll($sql) {
		$con = $this->PDO->prepare($sql);
		try {
			$con->execute();
			return $con->fetchAll();
		} catch (PDOException $e) {
			die("sql语句查询失败:" . $e->getMessage());
		}
	}
//        单行查询
    public function fetch($sql) {
        $con = $this->PDO->prepare($sql);
        try {
            $con->execute();
            return $con->fetch();
        } catch (PDOException $e) {
            die("sql语句查询失败:" . $e->getMessage());
        }
    }
//    增加数据      字符串拼接sql命令
	public function insert($table, $data) {
		$sql = "INSERT INTO {$table} (";
		foreach ($data as $key => $value) {
			$sql .= $key . ",";
		}
		$sql = substr($sql, 0, -1);
		$sql .= ') VALUES (';
		foreach ($data as $key => $value) {
			$sql .= '?,';
		}
		$sql = substr($sql, 0, -1);
		$sql .= ')';
        $con = $this->PDO->prepare($sql);
		for ($i = 1; $i < count($data)+1; $i++) {
			$con->bindValue($i, array_values($data)[$i - 1]);
		}
		try {
			 return $con->execute();
		} catch (PDOException $e) {
			die("sql插入失败" . $e->getMessage());
		}
	}
//	删除满足条件的数据
	public function delete($table,$data){
	    $sql = "DELETE FROM {$table} WHERE ";
	    foreach ($data AS $key=>$value){
            $sql .= $key . "=?,";
        }
        $sql = substr($sql, 0, -1);
        $con = $this->PDO->prepare($sql);
        for ($i = 1; $i < count($data)+1; $i++) {
            $con->bindValue($i, array_values($data)[$i - 1]);
        }
        try {
            $con->execute();
            return true;
        } catch (PDOException $e) {
            die("sql删除失败" . $e->getMessage());
        }
    }
//    更新数据
    public function update($table,$data,$id){
	    $sql = "UPDATE {$table} SET ";
	    foreach ($data AS $key=>$value){
	        $sql .= $key . '=?,';
        }
        $sql = substr($sql,0,-1);
        $sql .= ' WHERE ';
        foreach ($id AS $key=>$value){
            $sql .= $key.'=?';
        }
        $con = $this->PDO->prepare($sql);
        for($i = 1;$i<count($data)+1;$i++){
            $con->bindValue($i,array_values($data)[$i-1]);
        }
        echo $sql;
        $con->bindValue($i,array_values($id)[0]);
        try{
             return $con->execute();
        }catch (PDOException $e){
            die("更新数据失败：".$e->getMessage());
        }

    }
}
