<?php
include('admin-class/display-patientinfo.php');
if(isset($_GET['id']))  $id = $_GET['id'];
    $data = new displayPatient();
    $fetchData = $data->onepatient($id);



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
                <p class="mb-0" style="font-size:16px"><strong>Payment Status</strong></p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:16px"><?php echo $data['payment_status']?></p>
              </div>
            </div>
            <hr>
          </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                            
                       <!-- <img  alt="Patient Image" style="width:50px; height: 50px; border-radius:50px;"> -->
                               style="font-size:16px;"> 
                             <a href="patient-personal.php?id=<?php echo $data['p_id']?>" style="text-decoration:none; font-size:16px;"><?php echo $data["p_name"]??''; ?></a>  
                               <?php echo $data["p_phone"]??''; ?>  
                            <?php echo $data["room_number"]??''; ?>  
                                <?php echo $data["p_payment"]??''; ?>  
                            <?php echo $data["date"]??''; ?>  
                            <?php echo $data["payment_status"]??''; ?>  
                             
                                <a href="edit-category.php?display=<?php echo $data['id']?>" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                
                        
                          <?php
                            }}else{ ?>
                            <tr>
                                 colspan="8">
                          <?php echo $fetchData; ?>
                          
                          <tr>
                          <?php
                          }?>
                
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
