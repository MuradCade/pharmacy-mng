<?php
  session_start();

include("admin-class/add-complain.php");

// get id of the complain
if(isset($_GET['display'])){
    $id = $_GET['display'];
    $display= new AddComplain();
    $fetchData = $display->displaycomplainbyid($id);
}else{
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
                <h3><i class="fa fa-cog"></i> Add Patient Complain</h3>
              </div>
            </div>
            <?php
                if(is_array($fetchData)){      
                foreach($fetchData as $data){
              ?>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Complain Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- form complain -->
                    <form action="admin-class/complain-update.php?update=<?php echo $data['id'];?>" method="post">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"  placeholder="Enter Name" name="fname" required value="<?php echo $data['fullname']??""?>"/>
    <label class="form-label" for="form4Example1">Fullname</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control"  placeholder="Enter Phone Number" name="phone" required value="<?php echo $data['phone']??""?>"/>
    <label class="form-label" for="form4Example2">Phone Number</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4" placeholder="Enter Complain (Cabasho)" name="message" required><?php echo $data['message']??""?></textarea>
    <label class="form-label" for="form4Example3">Complain</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Submit</button>
</form>
                    <!-- end form complain -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }}?>
    <?php include 'include/footer.php';?>
  </body>
</html>
