<?php
    session_start();

    if(!isset($_SESSION['userid'])){
    
        header("location:../index.php");
        exit();
    }
   
include_once('admin-class/display-particular-user.php');

if(isset($_SESSION['userid'])) $id = $_SESSION['userid'];
$usersdata = new DisplayUser();
$fetchData = $usersdata->User($id);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/profile.css">
    </head>
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
                <h3><i class="fa fa-user"></i> Your Profile</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile Configuration Configuration</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <!-- profile card -->
                  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>

    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
        <?php if(isset($_GET['error'])){?>
                  <div class="alert alert-danger text-center" role="alert">
                    <?php echo $_GET['error'];?>
                </div>
        <?php }else if(isset($_GET['success'])){?>
                    <div class="alert alert-success text-center" role="alert">
                    <?php echo $_GET['success'];?>
                </div>

                    <?php }?>
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <?php
                                if(is_array($fetchData)){      
                                    foreach($fetchData as $data){
                                        ?>
                                        
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="admin-img/<?php echo $data['img']?>" alt="profile">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->

                    <form action="admin-class/add-profile.php?id=<?php echo $data['userid']?>" method="post" enctype='multipart/form-data'>
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="file">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo $data['username']?>" name="username">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputFirstName">Full name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your full name" value="<?php echo $data['fullname']?>" name="fname">
                            </div>
                        </div>
                        
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="text" placeholder="Enter your email address" value="<?php echo $data['email']?>" name="email">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?php echo $data['phone']?>" name="phone">
                            </div>
                           
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary"  name="submit">Save changes</button>
                    </form>
                    <?php } }?>
                </div>
            </div>
        </div>
    </div>
</div>

                  <!-- end profile -->
                  
            </div>
        </div>
    </div>
   
      </div>
    </div>
  </div>
</section>
                  <!-- end company card -->
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
