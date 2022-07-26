<?php

session_start();

if(isset($_SESSION["id"]) && isset($_SESSION["username"])){
  header("location:home.php");
  exit();
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Pharmacy Management System</title>

    <!-- Bootstrap -->
    <link
      href="vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet" />
  </head>

  <body class="login">
    <div class="login_wrapper">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <center>
                <img src="build/images/logo.png" alt="..." width="200" />
              </center>
              <div class="clearfix"></div>
              <?php
              if(isset($_GET["error"])){?>
              <div class="alert alert-danger text-dark text-center" role="alert" style="font-size:16px; font-weight:bold;">
                <?php echo $_GET["error"];?>
              </div>
               <?php } ?>
            </div>
            <div class="x_content">
              <form action="includes/login.php" method="post"
                id="demo-form2"
                data-parsley-validate
                class="form-horizontal form-label-left"
              >
                <div class="item form-group">
                  <div class="col-md-12 col-sm-12 form-group has-feedback">
                    <input
                      type="text"
                      name="username"
                      class="form-control has-feedback-left"
                      placeholder="Enter Username ..."
                    />
                    <span
                      class="fa fa-user form-control-feedback left"
                      aria-hidden="true"
                    ></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-12 col-sm-12 form-group has-feedback">
                    <input
                      type="password"
                      name="pwd"
                      class="form-control has-feedback-left"
                      placeholder="Enter Password ..."
                    />
                    <span
                      class="fa fa-lock form-control-feedback left"
                      aria-hidden="true"
                    ></span>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-12 col-sm-12">
                    <button class="btn btn-primary" name="login">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center mb-2" style="font-weight:600;">Developed by <strong class="text-secondary">Tayo Tech</strong></p>
  </body>
</html>
