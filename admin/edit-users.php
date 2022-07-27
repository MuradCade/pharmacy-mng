<?php

include_once('admin-class/display-user-by-id.php');

if(isset($_GET['display'])){
  $id = $_GET['display'];
}
$display = new Usersdata();
$fetch = $display->displayUser($id);


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
                <h3><i class="fa fa-medkit"></i>Edit Users</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <!-- Error Message -->
                  <?php if(isset($_GET['error'])){?>
                  <div class="alert alert-danger text-center text-dark" role="alert" style='font-size:14px; font-weight:bold;'>
                    <?php echo $_GET['error'];?>
                </div>
                    <?php }?>


                    <?php if(is_array($fetch)){  
                      foreach ($fetch as $fetched) {?>
                  <form action="admin-class/update-users.php?update=<?php echo $id?>"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Full Name" name="fname" value="<?php echo $fetched['fullname']?>">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  </div>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="number" class="form-control has-feedback-left" placeholder="Contact .." name="phone" value="<?php echo $fetched['phone']?>">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Email" name="email" value="<?php echo $fetched['email']?>">
                    <span class="fa fa-inbox form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                        <div class="text-center">
                <a href="users.php" class="btn btn-primary"> Cancel</a>
                <button class="btn btn-success" name="submit"><i class="fa fa-edit"></i> Update</button>

                        </div>
              </form>
                  <?php } }?>
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
