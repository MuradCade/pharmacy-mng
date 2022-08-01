<?php
include('admin-class/display-patientinfo.php');
require_once('admin-class/trackpayment.php');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
    $data = new displayPatient();
    $fetchData = $data->onepatient($id);

}

  if(isset($_GET['id'])){
    $paymenttracker = new Trackpayment();
    $fetch = $paymenttracker->DisplaypaymentTrack($id);
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
                <h3><i class="fa fa-medkit"></i> Particular Patient </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Patient Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                            if(is_array($fetchData)){      
                            foreach($fetchData as $data){
                          ?>

<section style="background-color: #eee;">
  <div class="container py-2">
    <div class="row">
      <div class="col">
                            </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="p-img/<?php echo $data['img']??'';?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
           
            
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-calendar text-secondary"></i>
                <p class="mb-0"><strong>Date: </strong><?php echo $data['date']?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-hotel text-secondary"></i>
                <p class="mb-0"><strong>Room Number: </strong><?php echo $data['room_number']?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-money text-secondary"></i>
                <p class="mb-0"><strong>Payment : </strong> $<?php echo $data['p_payment']?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-money text-secondary"></i>
                <p class="mb-0"><strong>Owed : </strong> $<?php echo $data['debt']?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-money text-secondary"></i>
                <p class="mb-0"><strong>Total Payment: </strong> $ <?php echo $data['total']?></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"style="font-size:16px"><strong>Full Name</strong></p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"style="font-size:16px"><?php echo $data['p_name']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"style="font-size:16px"><strong>Phone Number</strong></p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:16px"><?php echo $data['p_phone']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"style="font-size:16px"><strong>Patient ID</strong></p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"style="font-size:16px"><?php echo $data['p_id']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:16px"><strong>Patient Service</strong></p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:16px"><?php echo $data['payment_status']?></p>
              </div>
            </div>
            <hr>
          </div>
        </div>
                      <!-- track payment -->
                      <div class="card mb-4 mb-lg-0">
                        <h4 class='mt-4  ml-2 text-center' style='font-size:18px;'><strong>Track Payment</strong></h4>
              <div class="card-body">
              <div class="row">
          <div class="col-lg-12">
             <!--Table-->
<table class="table table-striped table-bordered w-auto">

<!--Table head-->
<thead>
  <tr>
    <th>Number</th>
    <th>Patient Id</th>
    <th>Total Amount</th>
    <th>Paid</th>
    <th>Owed(Lacag Weli Lagu leeyahay)</th>
    <th>Date</th>
  </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>

  <?php
                            if(is_array($fetch)){ 
                              $i = 1;     
                            foreach($fetch as $data2){
                          ?>

                          <tr>
                              <td><?php echo $i;?></td>
                              <td><?php echo $data2['userid']?></td>
                              <td><?php echo '$'.$data2['total']?></td>
                              <td><?php echo '$'.$data2['paid']?></td>
                              <td><?php echo '$'.$data2['owed']?></td>
                              <td><?php echo $data2['date']?></td>
                          </tr>
                          <?php $i++; }}?>
</tbody>
<!--Table body-->


</table>

          </div>
         </div>
<!--Table-->
</div>
        <!-- end track payment -->    
              </div>
      </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
          
                
<?php }}?>                
                  </form>
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
