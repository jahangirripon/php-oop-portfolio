<?php 

class Login
{	
	public $link;
	
	public function __construct()
	{
		$host_name='localhost';
		$user_name='root';
		$password= '';
		$db_name = 'dbportfolio';
		$this->link=mysqli_connect($host_name,$user_name,$password,$db_name);
		if(!$this->link) {
			die('Connection Failed'.mysqli_error($this->link));
		}
	}

	public function admin_login_check($data){
		$password = md5($data['password']);
		$sql = "SELECT * FROM tbl_admin WHERE email_address='$data[email_address]' AND password='$password'";
		$query_result=mysqli_query($this->link, $sql);
		$admin_info = mysqli_fetch_assoc($query_result);
		if($admin_info){
			session_start();
			$_SESSION['admin_id']=$admin_info['admin_id'];
			$_SESSION['admin_name']=$admin_info['admin_name'];
			header('Location:admin_master.php');
		} else {
			$message = "Please insert correct info!";
			return $message;
		}
	}
}


 ?>