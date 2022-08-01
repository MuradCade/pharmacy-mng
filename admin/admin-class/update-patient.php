<?php

require_once('../model/db.php');
require_once('trackpayment.php');
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
            $paymentTotal = $_POST['total'];
            
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
                    $total = $paymentTotal-$powed;
                    $img = $_FILES["file"]["name"];
                    $tempname = $_FILES["file"]["tmp_name"];
                    $folder = "../p-img/" . $img;
                    if(empty($img)){
                        if(isset($_GET['display'])) $id = $_GET['display'];
                        //  track payment
                        $trackpayment = new Trackpayment();
                        $trackpayment->Track($pid,$paymentTotal,$powed,$total,$date);

                       $sql = "Update patient Set  p_id = '$pid',
                       p_name = '$pname', p_phone = '$pphone',room_number = '$proom', date = '$date',
                        p_payment = '$ppayment', payment_status = '$paymentStatus',
                        debt = '$powed', total = '$total'  where id = '$id'";
                       $result = mysqli_query($this->connect,$sql);
                               
                   if ($result) {
                      
                       header("location:../patientinfo.php?success=Patient-Updated-Successfully");
                       exit();
                   } else {
                       header("location:../patientinfo.php?error=Image-Failed-To-Upload");
                       exit();
       
                   } 
                    }else{
                        if(isset($_GET['display'])) $id = $_GET['display'];
                        //  track payment
                        $trackpayment = new Trackpayment();
                        $trackpayment->Track(pid,$paymentTotal,$powed,$total,$date);

                       $sql = "Update patient Set img = '$img', p_id = '$pid',
                       p_name = '$pname', p_phone = '$pphone',room_number = '$proom', date = '$date',
                        p_payment = '$ppayment', payment_status = '$paymentStatus',
                        debt = '$powed', total = '$total'  where id = '$id'";
                       $result = mysqli_query($this->connect,$sql);
                               
                   if (move_uploaded_file($tempname, $folder)) {
                      
                       header("location:../patientinfo.php?success=Patient-Updated-Successfully");
                       exit();
                   } else {
                       header("location:../patientinfo.php?error=Image-Failed-To-Upload");
                       exit();
       
                   }
                    }
                }
        
        }
    }

}


$newPateint = new AddPatient();
$newPateint->Patientdata();