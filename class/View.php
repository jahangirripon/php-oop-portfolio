<?php

require_once 'db_connect.php';

class View  extends Db_connect {
 
    protected $link;
    
    public function __construct(){
        
        $this->link = $this->database_connection();
        
    }
    
    
    
    public function select_all_published_about_info() {
        $sql = "SELECT * FROM tbl_info WHERE info_type = 'about'";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
    
    public function select_all_published_mission_info() {
        $sql = "SELECT * FROM tbl_info WHERE info_type = 'mission'";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
    
    public function select_all_published_vision_info() {
        $sql = "SELECT * FROM tbl_info WHERE info_type = 'vision'";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
    
     public function select_all_published_gallery_info() {
        $sql = "SELECT * FROM tbl_gallery WHERE publication_status = 1";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
    
    public function select_all_published_portfolio_info() {
        $sql = "SELECT * FROM tbl_portfolio WHERE publication_status = 1";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
    
}
