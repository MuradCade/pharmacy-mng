<?php 

require('../model/db.php');

class AddComplain extends Database{

    // add complain
public function newcomplain($fname,$phone,$message){
    $sql = "insert into complain(fullname,phone,message)value('$fname','$phone','$message')";
    $result = mysqli_query($this->connect,$sql);
    if($result){
        header('location:complain.php?success=Complain-Added-Successfully');
        exit();
    }
    else{
        header('location:complain.php?error=Failed-To-Add-Complain');
        exit();
    }

}
    // display complain
    public function displaycomplain(){
        $sql = "select * from complain";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;
   

        return $data;
    
    }
    // display complain
    public function displaycomplainbyid($id){
        $sql = "select * from complain where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;
   

        return $data;
    
    }

    // update complain
    public function Updatecomplain($id,$fname,$phone,$message){
        $sql = "UPDATE  complain SET fullname = '$fname', phone = '$phone', message = '$message' where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header('location:../complain.php?success=Complain-Updated-Successfully');
            exit();
        }
        else{
            header('location:../complain.php?error=Failed-To-Update-Complain');
            exit();
        }
    
    
    }
    
    // delete complain
    public function deletecomplain($id){
        $sql = "DELETE from complain where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header('location:complain.php?success=Complain-Deleted-Successfully');
            exit();
        }
        else{
            header('location:complain.php?error=Failed-To-Delete-Complain');
            exit();
        }
    
        
    
    }
    
}


?>