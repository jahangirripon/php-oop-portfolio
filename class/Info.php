<?php 

	require 'db_connect.php';
	
	class Info extends Db_connect {

		protected $link;

		public function __construct() {

			$this ->link = $this->database_connection();
		}

		public function add_info($data){
			$sql = "INSERT INTO tbl_info(info_name, info_description, info_type) VALUES ('$data[info_name]','$data[info_description]','$data[info_type]')";
			if(mysqli_query($this->link, $sql)){
				$message="Information saved successfully";
				return $message;
			}else{
				die('Query problem'.mysqli_error($this->link));
			}
		}

		public function select_all_info_info(){
			$sql = "SELECT * FROM tbl_info";
			if(mysqli_query($this->link, $sql)){
				$query_result = mysqli_query($this->link, $sql);
				return $query_result;
			}else {
				die('Query Problem'.mysqli_error($this->link));
			}
		}
                
                public function select_all_info_by_id($info_id){
			$sql = "SELECT * FROM tbl_info WHERE info_id='$info_id'";
			if(mysqli_query($this->link, $sql)){
				$query_result = mysqli_query($this->link, $sql);
				return $query_result;
			}else {
				die('Query Problem'.mysqli_error($this->link));
			}
		}
                
                public function update_all_info($data){
                    extract($data);
                        $sql = "UPDATE  tbl_info SET info_name='$info_name', info_description='$info_description'  WHERE info_id='$info_id' AND info_type='$info_type'";
                    
			//$sql = "UPDATE tbl_info SET (info_name, info_description, info_type) VALUES ('$data[info_name]','$data[info_description]','$data[info_type]')";
			if(mysqli_query($this->link, $sql)){
				$message="Information saved successfully";
				return $message;
			}else{
				die('Query problem'.mysqli_error($this->link));
			}
		}

	}




 ?>