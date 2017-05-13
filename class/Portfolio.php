<?php

require_once 'db_connect.php';

class Portfolio extends Db_connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }
    
    

    public function save_portfolio_image($data) {
        $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['portfolio_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
        $file_size = $_FILES['portfolio_image']['size'];
        $check = getimagesize($_FILES['portfolio_image']['tmp_name']);
        if ($check) {

            if (file_exists($target_file)) {
                echo('This image exist!');
            } else {

                if ($file_size > 5000000) {
                    echo('Too Large!');
                } else {

                    if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'JPG' && $file_type != 'PNG') {
                        echo('File type shoule be jpg or png');
                    } else {
                        move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $target_file);
                        $sql = "INSERT INTO tbl_portfolio (portfolio_title, portfolio_image, portfolio_link, publication_status)"
                                . "VALUES ('$data[portfolio_title]','$target_file','$data[portfolio_link]','$data[publication_status]')";
                        if (mysqli_query($this->link, $sql)) {
                            $message = 'Portfolio uploded';
                            return $message;
                        } else {
                            echo ('Died' . mysqli_error($this->link));
                        }
                    }
                }
            }
        } else {
            die('Not an image!');
        }
    }
    
    public function select_all_portfolio_info(){
        
        $sql="SELECT * FROM tbl_portfolio";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
        }
    }
    
    public function select_portfolio_info_by_id($portfolio_id){
        $sql="SELECT * FROM tbl_portfolio WHERE portfolio_id='$portfolio_id' ";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
            
        }
    } 
    
    public function update_portfolio_info($data){
         extract($data);
        $new_image = $_FILES['portfolio_image']['name'];
        if ($new_image) {
        $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['portfolio_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
        $file_size = $_FILES['portfolio_image']['size'];
        $check = getimagesize($_FILES['portfolio_image']['tmp_name']);
        if ($check) {

            if (file_exists($target_file)) {
                echo('This image exist!');
            } else {

                if ($file_size > 5000000) {
                    echo('Too Large!');
                } else {

                    if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'JPG' && $file_type != 'PNG') {
                        echo('File type shoule be jpg or png');
                    } else {
                        move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $target_file);
                       
                        $sql ="UPDATE  tbl_portfolio SET portfolio_title='$portfolio_title', portfolio_image='$target_file',portfolio_link='$portfolio_link', "
                                . "publication_status='$publication_status' WHERE portfolio_id='$portfolio_id'  ";
                        if (mysqli_query($this->link, $sql)) {
                            $message = 'Image uploded';
                            return $message;
                        } else {
                            echo ('Died' . mysqli_error($this->link));
                        }
                    }
                }
            }
        } else {
            die('Not an image!');
        }
    }
    }
    
     public function delete_portfolio_info_by_id($portfolio_id){
         $sql ="DELETE FROM tbl_portfolio WHERE portfolio_id='$portfolio_id'  ";
        if(mysqli_query($this->link, $sql)){
            $message = 'Deleted Successfully.';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->link));
        }
    }

}
