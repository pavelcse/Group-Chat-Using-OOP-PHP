<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');

class Project{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }
        
    public function autoRefresh($name, $body){
        $query = "INSERT INTO tbl_box(name,body)VALUES('$name','$body')";
        $data  = $this->db->insert($query);
    }
    
    public function autoRefreshGet(){
        $query = "SELECT * FROM tbl_box ORDER BY id DESC LIMIT 100";
        $value = $this->db->select($query);
        
        $data = '';
        $data .=  '<div> <ul>' ; 
        if ($value) {
                while ($getData = $value->fetch_assoc()) {
                        $data .= '<li><span>'. $getData['time'] .'</span>&nbsp;<b>'. $getData['name'] .'</b>&nbsp;'. $getData['body'] .'</li>';
                }
        } else {
                $data .= '<li> No Data Found..!</li>';
        }

        $data .= '</ul> </div>';
        echo $data;
    }

    public function countUser(){
        $query="SELECT * FROM tbl_login WHERE active='1'";
        $select=$this->db->select($query);
        if($select){
        $count=mysqli_num_rows($select);
        echo "(".$count.")";
        }else{
            echo "0";
        }
    }

}