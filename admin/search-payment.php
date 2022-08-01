<?php
include_once('admin-class/search-payment.php');
if(isset($_POST['submit'])){
  $date = $_POST['date'];
    $search = new Searchpayment();
   
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
                <h3><i class="fa fa-money"></i> Search Particular Paymetn Date</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Date Of Particular Payment</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="search-payment.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="date" class="form-control has-feedback-left" name="date">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <!-- <input type="text" class="form-control has-feedback-left" placeholder="Description">
                    <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span> -->
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <a href="payment.php" class="btn btn-primary">Cancel</a>
                    <button type="submit" class="btn btn-success" name="submit">Search</button>
                  </div>
                </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 px-2 card-footer">
              <div class="h4">Payment Information</div>
              <hr>
              <?php
             if(isset($date)){
              $search->Search($date);
              $search->numberPatient($date);
              echo "<hr>";
             }
              else{
                echo "There Is No Aviable Data To Show Here. <br> Please Search To Se Results";
              }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?>
  </body>
</html>
