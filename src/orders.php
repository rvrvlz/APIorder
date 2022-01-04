<?php
include_once 'DBconn.php';

class order extends DBconn{

    public function getAll($filter, $value){

        if($filter == "date"){
            $sql = "SELECT * FROM orders WHERE date >='".$value."';";
            $result = $this->connect()->query($sql);
            $this->disconnect();
            return $result;

        }elseif($filter == "company"){
            $sql = "SELECT * FROM orders WHERE company ='".$value."';";
            $result = $this->connect()->query($sql);
            $this->disconnect();
            return $result;

        }else{
            $sql = 'SELECT * FROM orders';
            $result = $this->connect()->query($sql);
            $this->disconnect();
            return $result;
        }

    }

    public function insert($arr){
        $sql = 'INSERT INTO orders VALUES (NULL,"'.$arr["date"].'","'.$arr["company"].'","'.$arr["qty"].'")';
        $result = $this->connect()->query($sql);
        $this->disconnect();
        return $result;
    }
}

?>