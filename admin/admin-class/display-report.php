<?php

    require_once('../model/db.php');

    class GetReport extends Database{
        public function Report(){
            $sql = "select * from patient";
            $result = mysqli_query($this->connect,$sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
   
return $data;
        }
    }

?>