<?php
include_once('admin-class/display-company.php');
session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$companydata = new Displaycompany();
$fetchData = $companydata->company();


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php';?>

  <body class="nav-md">
            <?php include 'include/sidebar.php';?>
            <?php include 'include/menufooter.php';?>
          </div>
        </div>

        <?php include 'include/topnav.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-cog"></i> Company Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>System Configuration</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <!-- company card -->
                  
                  <section class="vh-200" style="background-color: #f4f5f7;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <?php
                            if(is_array($fetchData)){      
                                foreach($fetchData as $data){
                                    ?>

<div class="col col-lg-12  mb-4 mb-lg-0">
    <div class="card mb-3" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <img src="admin-img/<?php echo $data['logo'];?>"
            alt="Avatar" class="img-fluid my-5" style="width: 140px;" />
            <h5>Marie Horwitz</h5>
            <p>Web Designer</p>
            <i class="far fa-edit mb-5"></i>
        </div>
        <div class="col-md-8">
            <div class="card-body p-4">
                
                </div>
                <h6>Company Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Company Name</h6>
                    <p class="text-muted"><strong><?php echo $data['company_name']?></strong></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Company Address</h6>
                    <p class="text-muted"><strong><?php echo $data['company_address']?></strong></p>
                  </div>
                </div>
                <h6>Contact Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-2">
                    <h6>Email</h6>
                    <p class="text-muted"><strong><?php echo $data['email']?></strong></p>
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Tel</h6>
                    <p class="text-muted"><strong><?php echo $data['tel']?></strong></p>
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Mobile</h6>
                    <p class="text-muted"><strong><?php echo $data['mobile']?></strong></p>
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Zaad</h6>
                    <p class="text-muted"><strong><?php echo $data['zaad']?></strong></p>
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Edahab</h6>
                    <p class="text-muted"><strong><?php echo $data['edahab']?></strong></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
    <a href="add-company.php?id=<?php echo $data['id'];?>" class="btn btn-primary mb-2"><i class="fa fa-edit"></i> Update</a>
    </div>
      </div>
      <?php } }?>
    </div>
  </div>
</section>
                  <!-- end company card -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?>
  </body>
</html>
