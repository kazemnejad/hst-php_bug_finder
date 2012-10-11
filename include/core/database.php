<?php
	include "../config.php";
	class db_engine{
		//variable
		private $host;
		private $db_name;
		private $user;
		private $pass;
		//Function
		public function __construct(){
			$host = $_config['db']['host'];
			$db_name = $_config['db']['name'];
			$user = $_config['db']['user'];
			$pass = $_config['db']['pass'];
		}
		private function connect(){
			mysql_connect($host,$user,$pass) or die("Unable to connect database");
		}
		private function query($query){
			this->connect();
			mysql_escape_string($query);
			if(mysql_query($query)){
				return false;
			}
		}
	}
?>
