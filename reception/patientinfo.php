<?php
 session_start();
 include('reception-class/display-patientinfo.php');
 include('reception-class/delete-patient.php');

 if(!isset($_SESSION['userid'])){
 
     header("location:../index.php");
     exit();
 }
 if($_SESSION['role'] != 'reception'){
  header("Location:../home.php");
  exit();
}
 $data = new displayPatient();
 $fetchData = $data->allpatient();

 if(isset($_GET['del'])){
  $id = $_GET['del'];
  $delete = new DeletePatient();
  $delete->Delete($id);
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
                <h3><i class="fa fa-medkit"></i> Patient Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>
          <!-- update and Error Message -->
          <?php if(isset($_GET['error'])){?>
                  <div class="alert alert-danger text-center" role="alert">
                    <?php echo $_GET['error'];?>
                </div>
                  <?php }else if(isset($_GET['success'])){?>
                    <div class="alert alert-success text-center" role="alert">
                    <?php echo $_GET['success'];?>
                </div>

                    <?php }?>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Patient</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="add-patient.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Add Patient</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <th>Patient Image</th>
                        <th>Patient ID</th>
                          <th>Patient Name</th>
                          <th>Patient Phone</th>
                          <th>Room Number</th>
                          <th>Payment Amount</th>
                          <th>Date</th>
                          <th>Patient Service</th>
                          <th>Location</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
                            if(is_array($fetchData)){      
                            foreach($fetchData as $data){
                          ?>
                            <tr>
                            <td> <img src="../admin/p-img/<?php echo $data['img']??'';?>" alt="Patient Image" style="width:50px; height: 50px; border-radius:50px;"></td>
                            <td style="font-size:14px;"><?php echo $data["p_id"]??''; ?></td>
                            <td><a href="patient-personal.php?id=<?php echo $data['p_id']?>" style="text-decoration:none; font-size:16px;"><?php echo $data["p_name"]??''; ?></a></td>
                            <td style="font-size:14px;"><?php echo $data["p_phone"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["room_number"]??''; ?></td>
                            <td style="font-size:14px;">$ <?php echo $data["p_payment"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["date"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["payment_status"]??''; ?></td>
                            <td style="font-size:14px;"><?php echo $data["location"]??''; ?></td>
                            <td>
                                <a href="edit-patient.php?display=<?php echo $data['id']?>" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                <a href="patientinfo.php?del=<?php echo $data['id']?>" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
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
