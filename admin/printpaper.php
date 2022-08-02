<?php
session_start();
include_once('admin-class/display-printpaperData.php');
include_once('admin-class/display-company.php');

if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
// fetch the patient info
$display = new DisplayData();
$fetchData = $display->Display();
// fetch company info
$displaycompany = new Displaycompany();
$fetch = $displaycompany->company();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php';?>
<head>

</head>
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
                <h3><i class="fa fa-print"></i> Print Paper</h3>
              </div>
            </div>

			<button class="btn btn-primary" style="float:left;" onclick="print('pages')"><i class="fa fa-print">Print</i></button>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
            <?php      if(is_array($fetchData)){      
								foreach($fetchData as $data){
									?>
                  <div class="x_content">
              <div class="page" id="pages">
				<div class="containers">
					<div class="date">
						<h4><?php  $date = date('d/m/Y'); echo $date;?></h4>
					</div>
					<div class="userinfo">
						<p>Patient No: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['p_id']?></a></p>
						<p>Name: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['p_name']?></a></p>
						<p>contact: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['p_phone']?></a></p>
						<p>paid: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['debt']?></a></p>
						<p>TotalAmount: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['p_payment']?></a></p>
						<p>Location: <a  style="text-decoration:none; color:navy; font-weight:normal; font-size:16px;  border-bottom:1px dotted  navy;"><?php echo  $data['location']?></a></p>
						<p></p>
					</div>
				</div>

				<p class='services'>Patient-Service <p style='font-size:14px; margin-top:-10px; font-weight:700;color:black;'><?php echo  $data['payment_status']?></p></p>
				<div class="ads">
					<h4>
						Services We Offer
					</h4>
					<p>Scalling(Sifaynta Ilkaha)</p>
					<p>Root Canal Treatment(Dhux Ka Dilid)</p>
					<p>Orthodontic Treatment(Silig Xidhid)</p>
					<p>Fixed & Removeable Prosthesis(Galinta Ilkaha)</p>
					<p>Fillings(Buxinta Ilkaha)</p>
					<p>Implant(Berista Ilkaha)</p>
					<p>Extraction(Sarida Ilkaha)</p>
					<p>Soft Tissue Graft(Cirid Berista)</p>
					<p>Dental Treatment(Dawaynta Xanunada Ilakaha Iyo Afka)</p>
          <?php      if(is_array($fetch)){      
								foreach($fetch as $data){
									?>
				<div class="number">
					<p class='line-top'></p>
					<p class='Phone'>Phone: <?php echo $data['mobile']?></p>
					<p class='Location'>Location: <?php echo $data['company_address']?></p>
					<p class='line-bottom'></p>
				</div>
        <?php }} ?>
				<div class="User">Served By : <?php echo $_SESSION['username']?></div>
				</div>

</div>
<?php }}?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
  function myprint(pages){
  var printdata = document.getElementById(pages);
  newwin = window.open("");
  newwin.document.write(printdata.outerHTML);
  newwin.print();
  newwin.close();
}
</script>
    <?php include 'include/footer.php';?>
  </body>
</html>
