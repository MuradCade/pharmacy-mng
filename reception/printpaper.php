<?php

include_once('reception-class/display-printpaperData.php');
include_once('reception-class/display-company.php');
session_start();
if(!isset($_SESSION['userid'])){

    header("location:../index.php");
    exit();
}
$display = new DisplayData();
$fetchData = $display->Display();

$displaycompany = new Displaycompany();
$fetch = $displaycompany->company();


?>
<!DOCTYPE html>
<!--
 * HTML-Sheets-of-Paper (https://github.com/delight-im/HTML-Sheets-of-Paper)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
-->
<html>
<!--  -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/printerpaper.css">
	</head>
	<body class="document" onload="window.print()">
		<?php foreach($fetch as $fetched){?>
		<div class="page" contenteditable="true">
			<div class="header">
				<div class="head1"><?php $date = date('Y/m/d h:i:sa'); echo"<h4>".$date."</h4>";?></div>
				<div class="head3" style="font-weight:bold;">Sales Receipt <strong>#<?php echo(rand(10,1000))?></strong></div>
			</div>
			<?php
                            if(is_array($fetchData)){      
								foreach($fetchData as $data){
									?>
			<div class="head2" style='text-align:center;'><h4><strong style="text-transform:uppercase"><?php echo $fetched['company_name']?></strong></h4></div>
			<p style="text-align:center; font-size:16px; font-weight:400; margin-top:-14px"><?php echo "Tel:" .$fetched['tel'];?>&numsp;<?php echo " Mobile:" .$fetched['mobile'];?> </p>
			<p style="text-align:center; font-size:16px; font-weight:400; margin-top:-14px"><?php echo "Zaad:" .$fetched['zaad'];?>&numsp;<?php echo " Edahab:" .$fetched['edahab'];?> </p>
			<p style="font-size:18px; font-weight:400; margin-top:10px;margin-bottom:10px;">Fullname: <?php echo $data['p_name']?></p>
			<p style="font-size:18px; font-weight:400;">Phone: <?php echo  $data['p_phone']?></p>
			<p style="font-size:18px; font-weight:400;">Date:  <?php echo $data['date']?></p>
			<p style="font-size:18px; font-weight:400;">Payment Amount: $<?php echo $data['p_payment']?></p>
			<p style="font-size:18px; font-weight:400;">Owed(Lagu Leeyahay): - $<?php echo $data['debt']?></p>
			<p style="font-size:18px; font-weight:400; text-align:center;">Total: $<?php echo $data['total']?></p>
			
			<div class="footer">
			<p><?php echo "Address: ".$fetched['company_address']?></p>
			<p><?php echo "Email: ".$fetched['email']?></p>
			<p><?php echo "Phone: ".$fetched['mobile']?></p>

			</div>
			<?php } }?>
		</div>
		<?php }?>
	</body>
</html>
