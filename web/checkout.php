<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Checkout :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	
	<?php include"./header.php"?>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$sql = "SELECT * FROM tabcart where customer_id='$pip'";
							$result = mysqli_query($link,$sql);
							$numt=1;
							while($row = mysqli_fetch_array($result)){
								if(isset($_POST["remove-item".$row["id"]])){
									$kit = $row["id"];
									$sqlDelete = "DELETE FROM `tabcart` WHERE `tabcart`.`id` = $kit AND `tabcart`.`customer_id` = $pip";
									$result1 = mysqli_query($link,$sqlDelete);
									echo"<script>window.location.reload()</script>";
									break;
								}
								echo '
								<script>
									function addProduct'.$row["id"].'(str){
										if(str==""){
											document.getElementById("focusSubject1'.$row["id"].'").innerHTML="1";
											document.getElementById("rate'.$row["id"].'").innerHTML="'.$row["price"].'";
											return;
										}
										if(window.XMLHttpRequest){
											xmlhttp = new XMLHttpRequest();
										}
										else{
											xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
										}
										xmlhttp.onreadystatechange = function(){
											if(xmlhttp.readyState==4 && xmlhttp.status==200){
												var tree = xmlhttp.responseText * '.$row["price"].';
												var j = "<div class=`invert`>$"+tree+"</div>";
												document.getElementById("focusSubject1'.$row["id"].'").innerHTML=xmlhttp.responseText;
												document.getElementById("rate'.$row["id"].'").innerHTML=j;
												console.log(xmlhttp.responseText)
											}
										}
										xmlhttp.open("GET","getQuantity.php?request=" + str,true);
										xmlhttp.send();
									}
								</script>
								<script>
									function subtractProduct'.$row["id"].'(str){
										if(str==""){
											document.getElementById("focusSubject1'.$row["id"].'").innerHTML="1";
											document.getElementById("rate'.$row["id"].'").innerHTML="'.$row["price"].'";
											return;
										}
										if(window.XMLHttpRequest){
											xmlhttp = new XMLHttpRequest();
										}
										else{
											xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
										}
										xmlhttp.onreadystatechange = function(){
											if(xmlhttp.readyState==4 && xmlhttp.status==200){
												var tree = xmlhttp.responseText * '.$row["price"].';
												var j = "<div class=`invert`>$"+tree+"</div>";
												document.getElementById("focusSubject1'.$row["id"].'").innerHTML=xmlhttp.responseText;
												document.getElementById("rate'.$row["id"].'").innerHTML=j;
												console.log(xmlhttp.responseText)
											}
										}
										xmlhttp.open("GET","getQuantitySubtracted.php?request=" + str,true);
										xmlhttp.send();
									}
								</script>
							<tr class="rem1">
								<td class="invert">'.$numt.'</td>
								<td class="invert-image">
									<a href="single.php">
										<img src="../../php%20mysql%20stack/Product%20Table/'.$row["image"].'" style="width: 40px;height:90px" alt=" " >
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus" onclick="subtractProduct'.$row["id"].'('.$row["id"].');">&nbsp;</div>
												<div id="focusSubject1'.$row["id"].'" class="entry value">
													<span id="demo">'.$row["quantity"].'</span>
												</div>
											<div class="entry value-plus" onclick="addProduct'.$row["id"].'('.$row["id"].');">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">'.$row["productName"].'</td>
								<td id="rate'.$row["id"].'" class="invert">$'.$row["amount"].'</td>
								<td class="invert">
									<div class="rem">
									<form action="'.$_SERVER['PHP_SELF'].'" method="post">
										<button name="remove-item'.$row["id"].'" class="responsive"><i class="far fa-window-close"></i></button>
									</form>	
									</div>
								</td>
							</tr>';
							$numt++;
							}
							
							?>

							
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
					<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.php">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
	
	<?php include "footer.php"?>