<?php

require_once('../model/db.php');

class AddPatient extends Database{
    public function Patientdata(){
        if(isset($_POST['submit'])){
            $pid = $_POST['p_id'];
            $pname = $_POST['p_name'];
            $pphone = $_POST['p_phone'];
            $proom = $_POST['p_room'];
            $date = $_POST['date'];
            $ppayment = $_POST['p_payment'];
            $powed = $_POST['p_owed'];
            $paymentStatus = $_POST['p_pstatus'];
            
                if(empty($pid)){
                    header("location:../add-patient.php?error=Empty-Patient-Id-Field");
                    exit();
                }
                
                else if(empty($pname)){
                    header("location:../add-patient.php?error=Empty-Patient-Name-Field");
                    exit();
                }
 
                else if(empty($pphone)){
                    header("location:../add-patient.php?error=Empty-Patient-Phone-Number-Field");
                    exit();
                }
                else if(empty($date)){
                    header("location:../add-patient.php?error=Empty-Date-Field");
                    exit();
                }
 
                else if(empty($ppayment)){
                    header("location:../add-patient.php?error=Empty-Payment-Field");
                    exit();
                }
                else if(empty($paymentStatus)){
                    header("location:../add-patient.php?error=Empty-PaymentStatus-Field");
                    exit();
                }
                else{
                         $total = $ppayment-$powed;
                         $img = $_FILES["file"]["name"];
                         $tempname = $_FILES["file"]["tmp_name"];
                         $folder = "../p-img/" . $img;
                         $sql = "insert into patient(img,p_id,p_name,p_phone,room_number,date,p_payment,payment_status,debt,total)
                        values('$img','$pid','$pname','$pphone','$proom','$date','$ppayment','$paymentStatus','$powed','$total')";
                        $result = mysqli_query($this->connect,$sql);
                                
                    if (move_uploaded_file($tempname, $folder)) {
                       
                        header("location:../patientinfo.php?success=New-Patient-Added-Successfully");
                        exit();
                    } else {
                        header("location:../patientinfo.php?error=Image-Failed-To-Upload");
                        exit();
        
                    }
                }
        
        }
    }

}


$newPateint = new AddPatient();
$newPateint->Patientdata();