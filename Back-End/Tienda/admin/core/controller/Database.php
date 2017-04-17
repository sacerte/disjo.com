<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="disjocom_localhost";$this->pass="D1sj02017*";$this->host="localhost";$this->ddbb="disjocom_katanalite";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>