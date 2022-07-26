<?php
require_once("admin-class/add-category.php");

if(isset($_POST['submit'])){
  $name = $_POST['c_name'];
  $desc = $_POST['desc'];


  if(empty($name)){
    header("location:add-category.php?error=Empty-Name-Field");
    exit();
  }
  
  else if(empty($desc)){
    header("location:add-category.php?error=Empty-Description-Field");
    exit();
  }
  else{
    $add_category = new patentcategory();
    $add_category->category($name,$desc);
    header('location:category.php');
    exit();
  }
  

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
                <h3><i class="fa fa-list"></i> Add Category</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php
              if(isset($_GET["error"])){?>
              <div class="alert alert-secondary text-dark text-center" role="alert" style="font-size:16px; font-weight:bold;">
                <?php echo $_GET["error"];?>
              </div>
               <?php } ?>
                  <div class="x_content">
                  <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text"  name="c_name" class="form-control has-feedback-left" placeholder="Category Name">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="desc" class="form-control has-feedback-left" placeholder="Description">
                    <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="category.php" class="btn btn-primary">Cancel</a>
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
