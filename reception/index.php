<?php

session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
if($_SESSION['role'] != 'reception'){
  header("Location:../home.php");
  exit();
}
include('reception-class/totalnumber.php');
$data = new TotalNumber();
// else if(isset($_SESSION['role']) !== "user"){
//   header("location:../home.php");
//   exit();
// }
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
                <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                  <div class="row">
                    <center>
                    <div class="tile_count">
                      <div class="col-md-6 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-hotel"></i> Number Patient</span>
                        <div class="count"><?php $data->Totalpatient();?></div>
                      </div>
                      <div class="col-md-6 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-dollar"></i> Number Rooms</span>
                        <div class="count"><?php $data->TotalRooms();?></div>
                      </div>
                    </div>
                  </center>
</div>
                  <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <canvas id="lineChart"></canvas> -->
                  </div>
                </div>
              </div>              
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                   
                    <div class="clearfix"></div>
                  </div>
                  
                </div>
              </div>
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
