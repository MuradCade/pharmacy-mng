<?php
include_once('reception-class/display-payment.php');

session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$payment = new displayPayment();
$fetchData = $payment->allpayment();

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
                      <?php
                            if(is_array($fetchData)){      
                            foreach($fetchData as $data){
                          ?>
                            <tr>
                            <td style="font-size:14px;"><?php echo $data["p_id"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["date"]??''; ?></td>
                            <td><?php echo $data["p_name"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["p_phone"]??''; ?></td>
                            <td style="font-size:14px;">$ <?php echo $data["p_payment"]??''; ?></td>
                            <td style="font-size:14px;">$ <?php echo $data["debt"]??''; ?></td>
                            <td style="font-size:14px;">$ <?php echo $data["total"]??''; ?></td>
                            <td>
                    <a href="printpaper.php?id=<?php echo $data['id'];?>" class="btn btn-primary" style="font-weight:bold"><i class="fa fa-print"> View</i></a>
                              </td>
                          </tr>
                          <?php
                            }}else{ ?>
                            <tr>
                              <td colspan="8">
                          <?php echo $fetchData; ?>
                        </td>
                          <tr>
                          <?php
                          }?>
                       
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
