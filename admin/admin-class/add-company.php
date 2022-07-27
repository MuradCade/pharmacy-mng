<?php


include_once('../model/db.php');

class AddCompany extends Database{
    public function Company(){
        if(isset($_POST['submit'])){
            $companyname = $_POST['companyname'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $mobile = $_POST['mobile'];
            $zaad = $_POST['zaad'];
            $edahab = $_POST['edahab'];

            if(isset($_GET['id'])) $id = $_GET['id'];
            

            $img = $_FILES["file"]["name"];
            $tempname = $_FILES["file"]["tmp_name"];
            $folder = "../admin-img/" . $img;

            $sql = "UPDATE  company SET company_name = '$companyname',
            company_address = '$address',email = '$email',tel = '$tel',mobile = '$mobile',zaad = '$zaad',edahab = '$edahab',
            logo = '$img' where id = '$id'";
            $result = mysqli_query($this->connect,$sql);
            if (move_uploaded_file($tempname, $folder)) {
                       
                header("location:../company.php?success=Company-Data-Saved-Successfully");
                exit();
            } else {
                header("location:../company.php?error=Company-Data-Failed-To-Save");
                exit();

            }
        }
        }
    }

    $company = new AddCompany();
    $company->Company();