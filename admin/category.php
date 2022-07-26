<?php
include("admin-class/display-category.php");
include("admin-class/delete-category.php");
$data = new displaycategory();
$fetchData = $data->allcategory();

if(isset($_GET['del'])){
  $del = $_GET['del'];
  $delete = new Deletecategory();
  $delete->Delete($del);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php";?>

  <body class="nav-md">
            <?php include "include/sidebar.php";?>
            <?php include "include/menufooter.php";?>
          </div>
        </div>

        <?php include "include/topnav.php";?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-medkit"></i> Patient Category</h3>
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
                    <h2>List of Patient Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="add-category.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Add Category</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                       
                        <tr>
                          <th>Category Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
      if(is_array($fetchData)){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['category_name']??''; ?></td>
      <td><?php echo $data['category_desc']??''; ?></td>
      <td>
           <a href="edit-category.php?display=<?php echo $data['id']?>" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
           <a href="category.php?del=<?php echo $data['id']?>" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
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
