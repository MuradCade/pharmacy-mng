<?php

include_once('admin-class/display-room.php');

$room = new displayrooms();
$fetch = $room->rooms();


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
                <h3><i class="fa fa-medkit"></i> Add Patient</h3>
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
                     <!-- Error Message -->
                  <?php if(isset($_GET['error'])){?>
                  <div class="alert alert-danger text-center text-dark" role="alert" style='font-size:14px; font-weight:bold;'>
                    <?php echo $_GET['error'];?>
                </div>
                    <?php }?>
                  <form action="admin-class/add-patientinfo.php"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="file" class="form-control has-feedback-left" name="file"/>
                    <span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="number" class="form-control has-feedback-left" placeholder="Patient ID" name="p_id" value="<?php $pid = rand(100,900); echo $pid; ?>">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  </div>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Patient Fullname" name="p_name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="ex. 09809879797" name="p_phone">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <select class="form-control has-feedback-left" name="p_room">
                    <option>Select Room</option>
                    <?php
                            if(is_array($fetch)){      
                            foreach($fetch as $data2){
                          ?>
                      <option><?php echo $data2['room_name']?></option>
                      
                      <?php } }?>
                    </select>
                    <span class="fa fa-hotel form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="date" class="form-control has-feedback-left" name="date">
                    <span class="fa fa-calendar  form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Amount Of Payment" name="p_payment">
                    <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Owed (Patient Lacag Lagu Leeyahay)" name="p_owed">
                    <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Payament Status" name="p_pstatus">
                    <span class="fa fa-check-square form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2 mt-2">
                     <a href="patientinfo.php" class="btn btn-primary">Cancel</a>
                      <button type="submit" class="btn btn-success" name="submit">Submit</button>
                  </div>
                </div>
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
