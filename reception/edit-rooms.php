<?php
require_once("reception-class/edit-room.php");

$edit_rooms = new Editroom();


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
                <h3><i class="fa fa-hotel"></i> Add Room</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Room Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php if(isset($_GET['display'])) $id = $_GET['display'];?>
                  <div class="x_content">
                  <form action="reception-class/update-room.php?display=<?php echo $id?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Room Number or Name" name="room_name" value="<?php $edit_rooms->room($id,'room_name');?>">
                    <span class="fa fa-hotel form-control-feedback left" aria-hidden="true" ></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Description" name="desc" value="<?php $edit_rooms->room($id,'room_desc');?>">
                    <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="rooms.php"class="btn btn-primary">Cancel</a>
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
