<?php
include('admin-class/display-users.php');
session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$users = new CurrentUsers();
$fetch = $users->Users();


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
                <h3><i class="fa fa-user"></i> Users</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <!-- <a href="add-cashier.php" class="btn btn-sm btn-info text-white"><i class="fa fa-user-plus"></i> Add Cashier</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>User Role</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php if(is_array($fetch)){  
                      foreach ($fetch as $fetched) {?>
                      <tbody>
                    <tr>
                      <td style="text-transform:capitalize;"><?php echo $fetched['fullname']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['phone']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['email']?></td>
                      <td style="text-transform:capitalize;"><?php echo $fetched['role']?></td>
                      <td>
                        <a href="edit-users.php?display=<?php echo $fetched['userid']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php }} ?>   
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
