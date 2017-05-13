<?php 

	class Dashboard {
		public function admin_logout(){
			unset($_SESSION['admin_id']);
			unset($_SESSION['admin_name']);

			header('Location:index.php');
		}
	}

 ?>