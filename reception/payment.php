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
                <h3><i class="fa fa-money"></i> Payment Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Payment Data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <!-- <a href="search-payment.php" class="btn btn-sm btn-info text-white"><i class="fa fa-search"></i> Search Payment</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <th>Patient ID</th>
                        <th>Date</th>
                          <th>Patient Name</th>
                          <th>Patient Number</th>
                          <th>Amount Payment</th>
                          <th>owed</th>
                          <th>Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                    <tr>
                        
                          <td>120</td>
                          <td>10/12/2022</td>
                          <td>Ahmed Adan Nour</td>
                          <td>063452934</td>
                          <td>$10</td>
                          <td>$4</td>
                          <td>$6</td>
                          <td>
                              <a href='printer.php'class="btn btn-sm btn-success text-white"><i class="fa fa-print"></i> Print</a>
                              <!-- <a  id='printbtn' class="btn btn-sm btn-danger text-white"><i class="fa fa-print"></i>Print</a> -->
                          </td>
                    </tr>
                    <tr>
                        
                          <td>121</td>
                          <td>10/12/2022</td>
                          <td>mumin Adan Nour</td>
                          <td>063452934</td>
                          <td>$10</td>
                          <td>$4</td>
                          <td>$6</td>
                          <td>
                              <a href='printer.php'class="btn btn-sm btn-success text-white"><i class="fa fa-print"></i> Print</a>
                              <!-- <a  class="btn btn-sm btn-danger text-white"><i class="fa fa-print"></i>Delete</a> -->
                          </td>
                    </tr>
                    <tr>
                        
                          <td>122</td>
                          <td>10/12/2022</td>
                          <td>abdi Adan Nour</td>
                          <td>063452934</td>
                          <td>$10</td>
                          <td>$4</td>
                          <td>$6</td>
                          <td>
                              <a href='printer.php'class="btn btn-sm btn-success text-white"><i class="fa fa-print"></i> Print</a>
                              <!-- <a  id='printbtn' class="btn btn-sm btn-danger text-white"><i class="fa fa-print"></i>Print</a> -->
                          </td>
                    </tr>
                       
                      </tbody>
                    </table>
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
