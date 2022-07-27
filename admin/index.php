<?php

session_start();
if(!isset($_SESSION["id"]) && !isset($_SESSION["username"]))
{
        header("Location:../index.php");
        exit();
}

include('admin-class/display-users.php');
$users = new CurrentUsers();
$fetch = $users->Users();

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
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-medkit"></i> Total Patient</span>
                        <div class="count">4,567</div>
                      </div>
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-money "></i> Total Payment</span>
                        <div class="count">2,315</div>
                      </div>
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">7,325</div>
                      </div>
                    </div>
                  </center>
</div>
                  <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sales Amount</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>              
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Current Users</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Role</th>
                        </tr>
                      </thead>


                      <?php if(is_array($fetch)){  
                      foreach ($fetch as $fetched) {?>
                      <tbody>
                    <tr>
                      <td style="text-transform:capitalize;"><?php echo $fetched['fullname']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['phone']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['email']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['role']?></td>
                    </tr>
                  </tbody>
                  <?php }} ?>     
                </table>
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
