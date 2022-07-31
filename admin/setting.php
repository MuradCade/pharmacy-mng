<?php
include_once('admin-class/display-company.php');
session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$companydata = new Displaycompany();
$fetchData = $companydata->company();
if($_SESSION['role'] != 'admin'){
  header("Location:../home.php");
  exit();
}

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
                <h3><i class="fa fa-cog"></i> Setting Configuration</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Configure Settings</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <!-- company card -->
                  
                  <section class="vh-200" style="background-color: #f4f5f7;">
                    <div class="container py-5 h-100">
              <!-- change password -->
                   <!-- form card change password -->
                   <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Your Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="admin-class/change-pwd.php" method="post" class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="" placeholder="Enter Your New Password..." name='pwd'>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Your Id</label>
                                    <input type="text" class="form-control" value="489867321" readonly name="id">
                                    <span class="form-text small text-muted">
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="submit">Sumbit</button>
                                </div>
                            </form>
                        </div>
                    </div>
              <!-- end -->
              <!-- change pwd -->
              <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Reception Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="admin-class/change-pwd.php" method="post" class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="" placeholder="Enter New Password..." name='pwd'>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Reception Id</label>
                                    <input type="text" class="form-control" value="76856826" readonly name='id'>
                                    <span class="form-text small text-muted">
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name='submit'>Sumbit</button>
                                </div>
                            </form>
                        </div>
                    </div>
              <!-- end -->

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
