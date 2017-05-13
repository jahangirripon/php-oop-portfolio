<?php 

class Db_connect{
	protected function database_connection(){
		$host_name='localhost';
		$user_name='root';
		$password='';
		$db_name='dbportfolio';
		$connection =mysqli_connect($host_name,$user_name,$password,$db_name);
		if(!$connection) {
			die('Connection Failed'.mysqli_error($connection));
		}
		return $connection;
	}
}

 ?>