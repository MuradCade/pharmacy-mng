<?php

include('admin-class/display-report.php');
session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$displaydata = new GetReport();
$fetchData = $displaydata->Report()




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
                <h3><i class="fa fa-bar-chart"></i> Report Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Report Table And Graph</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
              <!-- graph area -->
              <div class="col-md-6 col-sm-4">
              <table class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Number</th>
                          <th>Owed</th>
                        </tr>
                      </thead>
                      <tbody>
                        <h4>Patients who owe money to the pharmacy</h4>
                        <hr>
                      <?php
                      $total = 0;
                      $result;
                            if(is_array($fetchData)){      
                            foreach($fetchData as $data){
                              if($data['debt'] >0){
                          ?>

                              <tr>
                                <td><?php echo $data['p_id'];?></td>
                                <td><?php echo $data['p_name'];?></td>
                                <td><?php echo $data['p_phone'];?></td>
                                <td><?php echo $data['debt']?></td>
                                <td><?php ?></td>
                              </tr>
                          <?php }
                        } }?>
                      </tbody>
                    </table>
              </div>
              
              <div class="col-md-5 col-sm-8  ">
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
              <!-- /graph area -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?></script>
   
  </body>
</html>
