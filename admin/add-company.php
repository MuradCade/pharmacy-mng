<?php
include_once('admin-class/edit-company.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];

  $companydata = new EditCompany();
  $fetchData = $companydata->Edit($id);
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
                <h3><i class="fa fa-cog"></i> Update Company Settings</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>System Configuration</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                            if(is_array($fetchData)){      
                                foreach($fetchData as $data){
                                    ?>

                  <form  action="admin-class/add-company.php?id=<?php echo $data['id']?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype='multipart/form-data'>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Company Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" required="required" class="form-control" placeholder="Company Name..." name="companyname" value="<?php echo $data['company_name']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Address <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" class="form-control " placeholder="Napico Manggahan, Pasig City" name="address" value="<?php echo $data['company_address']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="support@gmail.com" name="email" value="<?php echo $data['email']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tel</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="Tel .." name="tel" value="<?php echo $data['tel']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Mobile</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="Mobile .." name="mobile" value="<?php echo $data['mobile']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Zaad</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="Zaad .." name="zaad" value="<?php echo $data['zaad']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Edahab</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="Edahab .." name="edahab" value="<?php echo $data['edahab']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Logo</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="file" name="file">
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                     <a href="company.php" class="btn btn-primary">Cancel</a>
                      <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
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
