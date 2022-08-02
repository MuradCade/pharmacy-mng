<?php
include('admin-class/img-of-current-user.php');
$img = new DisplayProfileImg();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<!-- top navigation -->
<div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="admin-img/<?php $img->Porfile('img')?>" alt="profile img">
                    <?php echo $img->Porfile('username')?>
                  </a>
               
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a href="profile.php" class="dropdown-item"  href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a>
                    <a  href="setting.php" class="dropdown-item"  href="javascript:;"><i class="fa fa-cog pull-right"></i> Settings</a>
                    <a  href="logout.php" class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
</body>
</html>