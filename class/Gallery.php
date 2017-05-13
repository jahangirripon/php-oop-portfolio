<?php

require_once 'db_connect.php';

class Gallery extends Db_connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }
    
    

    public function save_gallery_image($data) {
        $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['gallery_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
        $file_size = $_FILES['gallery_image']['size'];
        $check = getimagesize($_FILES['gallery_image']['tmp_name']);
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
                        move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
                        $sql = "INSERT INTO tbl_gallery (image_title, gallery_image, image_description, publication_status)"
                                . "VALUES ('$data[image_title]','$target_file','$data[image_description]','$data[publication_status]')";
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
    
    public function select_all_gallery_info(){
        
        $sql="SELECT * FROM tbl_gallery";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
        }
    }
    
    public function select_gallery_info_by_id($image_id){
        $sql="SELECT * FROM tbl_gallery WHERE image_id='$image_id' ";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
            
        }
    } 
    
    public function update_gallery_info($data){
         extract($data);
        $new_image = $_FILES['gallery_image']['name'];
        if ($new_image) {
       $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['gallery_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
        $file_size = $_FILES['gallery_image']['size'];
        $check = getimagesize($_FILES['gallery_image']['tmp_name']);
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
                        move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
                       
                        $sql ="UPDATE  tbl_gallery SET image_title='$image_title', gallery_image='$target_file',image_description='$image_description', "
                                . "publication_status='$publication_status' WHERE image_id='$image_id'  ";
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
    
     public function delete_gallery_info_by_id($image_id){
         $sql ="DELETE FROM tbl_gallery WHERE image_id='$image_id'  ";
        if(mysqli_query($this->link, $sql)){
            $message = 'Deleted Successfully.';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->link));
        }
    }

}
