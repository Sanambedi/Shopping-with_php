<!DOCTYPE html>

<html lang="zxx">
<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	
	<?php
	include "header.php"?>
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<!--Carousel start-->
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>Wireless</span> earbuds</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Headphone</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Standard</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>40%</span> Discount</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Discount</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
		<!--Carousel ends-->

	<!-- //banner -->

	<!-- top Products -->
	<!--Our new products section starts-->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New Men's Wear</h3>
							<div class="row">
								
										<?php 
											$sql = "SELECT * FROM producttable where mainCategory='2' ORDER BY id DESC LIMIT 3";
											$result= mysqli_query($link,$sql);
											while($row=mysqli_fetch_array($result)){
												if(isset($_POST["submit-crack".$row['id']])){
													
													$sqlx = "INSERT INTO tabcart(customer_id,product_id,quantity,date,price)
													VALUES('$_POST[name]',
															'$_POST[productid]',
															'$_POST[quantity]',
															NOW(),
															'$_POST[amount]')";
															if(!mysqli_query($link, $sqlx))
															{
																die('error:'.mysqli_error($link));
															}  
												}
												echo'
										<div class="col-md-4 product-men mt-5">
											<div class="men-pro-item simpleCart_shelfItem">
												<div class="men-thumb-item text-center">
													<img src="../../php mysql stack/Product Table/'.$row["productImage"].'" width="100px" height="201px" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.php" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product text-center border-top mt-4">
													<h4 class="pt-1">
														<a href="single.php">'.$row["productName"].'</a>
													</h4>
													<div class="info-product-price my-2">
														<span class="item_price">$'.$row["productMrp"].'</span>
														<del>$'.$row["productMrp"].'</del>
													</div>
													<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<form action="'.$_SERVER['PHP_SELF'].'" method="post">
														<fieldset>
															<input type="hidden" name="name" value="'.$pip.'" />
															<input type="hidden" name="productid" value="'.$row["id"].'" />
															<input type="hidden" name="quantity" value="1" />
															<input type="hidden" name="item_name" value="'.$row["productName"].'" />
															<input type="hidden" name="amount" value="'.$row["productMrp"].'" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<button name="submit-crack'.$row["id"].'" class="button btn-lg btn-primary" >Add to cart</button>
														</fieldset>
													</form>
													</div>
												</div>
											</div>
										</div>
										';
											}
										?>
								</div>
						</div>						
											
										
										
											
											
						<!--Our new products end-->
						<!-- //first section -->
						<!-- second section starts -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New Women's wear</h3>
							<div class="row">
								<?php
								
									$sql1 = "SELECT * FROM producttable WHERE maincategory='1' ORDER BY id DESC LIMIT 3";
									$result1 = mysqli_query($link,$sql1);
									if(isset($_POST['submit-crack'])){
										echo"<script>alert('User must signin first')</script>";
									}
									while($row1 = mysqli_fetch_array($result1)){
										if(isset($_POST["submit-crack".$row1['id']])){
											echo '<div class="alert alert-danger alert-dismissible">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
										  </div>';
										}
										if($pip==0){
											echo'
											<div class="col-md-4 product-men mt-5">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item text-center">
														<img src="../../php%20mysql%20stack/Product Table/'.$row1["productImage"].'" width="100px" height="201px" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
															<form method="post" action="single.php?request='.$row1["id"].'" class="form3'.$row1["id"].'">
															<fieldset>
																<input type="submit" class="link-product-add-cart" id="show-item'.$row1["id"].'" name="show-item'.$row1["id"].'" value="Quick View" />
															</fieldset>
															</form>';
															// echo '<script>
															// 	$(document).ready(function(){
															// 		$(".form3'.$row1["id"].'").submit(function(event){
															// 			event.preventDefault()
															// 			var productid1 = document.getElementById("productid1'.$row1["id"].'").value
																		
															// 			$.post("single.php",{productid1:productid1},function(data){
															// 				location.replace("./single.php")
															// 			})
															// 		})
															// 	})
															// 	</script>';	
															echo '</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product text-center border-top mt-4">
														<h4 class="pt-1">
															<a href="single.php">'.$row1["productName"].'</a>
														</h4>
														<div class="info-product-price my-2">
															<span class="item_price">$'.$row1["productMrp"].'</span>
															<del>$'.$row1["productMrp"].'</del>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
														<form action="'.$_SERVER['PHP_SELF'].'" class="213" method="post" id="blank6255">
															<fieldset>
																<input type="hidden" name="name" value="'.$pip.'" />
																<input type="hidden" name="productid" value="'.$row1["id"].'" />
																<input type="hidden" name="quantity" value="1" />
																<input type="hidden" name="item_name" value="'.$row1["productName"].'" />
																<input type="hidden" name="amount" value="'.$row1["productMrp"].'" />
																<input type="submit" name="submit-crack" class="button btn-lg btn-primary" value="Add To Cart">
															</fieldset>
														</form>
														</div>
													</div>
												</div>
											</div>';
											
										}
										else{
										echo'
										<div class="col-md-4 product-men mt-5">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item text-center">
												<img src="../../php mysql stack/Product Table/'.$row1["productImage"].'" alt="" width="100px" height="201px">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
													<form method="post" action="single.php?request='.$row1["id"].'" class="form3'.$row1["id"].'">
													<fieldset>
														<input type="submit" class="link-product-add-cart" id="show-item'.$row1["id"].'" name="show-item'.$row1["id"].'" value="Quick View" />
													</fieldset>
													</form>';

													echo '</div>
												</div>
												<span class="product-new-top">New</span>
											</div>
											<div class="item-info-product text-center border-top mt-4">
												<h4 class="pt-1">
													<a href="single.php">'.$row1["productName"].'</a>
												</h4>
												<div class="info-product-price my-2">
													<span class="item_price">$'.$row1["productMrp"].'</span>
													<del>$'.$row1["productMrp"].'</del>
												</div>
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">';
												echo'	
													<form method="post" class="form2'.$row1["id"].'">
														<fieldset>
															<input type="hidden" name="image" value="'.$row1["productImage"].'" id="image'.$row1["productImage"].'" />
															<input type="hidden" name="productName" value="'.$row1["productName"].'" id="productName'.$row1["productName"].'" />
															<input type="hidden" name="name" value="'.$pip.'" id="name" />
															<input type="hidden" name="productid" id="productid'.$row1["id"].'" value="'.$row1["id"].'" />
															<input type="hidden" name="quantity" value="1" id="quantity"/>
															<input type="hidden" name="item_name" value="'.$row1["productName"].'" id="item_name" />
															<input type="hidden" name="amount" value="'.$row1["productMrp"].'" id="amount'.$row1["productMrp"].'"/>
															<input type="submit" name="submit-crack'.$row1["id"].'" id="submit-crack'.$row1["id"].'" class="button btn-lg btn-primary" value="Add to Cart">
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>';
									echo '<script>
									$(document).ready(function(){
										$(".form2'.$row1["id"].'").submit(function(event){
											event.preventDefault()
											var productName = document.getElementById("productName'.$row1["productName"].'").value
											var customer_id = document.getElementById("name").value
											var productid = document.getElementById("productid'.$row1["id"].'").value
											var quantity = document.getElementById("quantity").value
											var price = document.getElementById("amount'.$row1["productMrp"].'").value
											var image = document.getElementById("image'.$row1["productImage"].'").value
											$.post("process.php",{productName:productName,customer_id:customer_id,productid:productid,quantity:quantity,price:price,image:image},function(data){
												window.location.replace("http://localhost/electro_store-web_Free28-08-2018_1414020280/web/checkout.php");
											})
										})
									})
								</script>';
									}
								}
								?>									
							</div>
						</div>
						<!-- //second section ends -->
						<!-- third section starts -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="images/image1.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- //third section ends -->
						<!-- fourth section starts-->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Large Appliances</h3>
							<div class="row">
									<?php 
										
										$sql2 = "SELECT * FROM producttable where mainCategory='8' ORDER BY id DESC LIMIT 3";
										$result2= mysqli_query($link,$sql2);
										while($row2=mysqli_fetch_array($result2)){
											if(isset($_POST["submit-crack".$row2['id']])){
												$sql = "INSERT INTO tabcart(customer_id,product_id,quantity,date,price)
												VALUES('$_POST[name]',
														'$_POST[productid]',
														'$_POST[quantity]',
														NOW(),
														'$_POST[amount]')";
														if(!mysqli_query($link, $sql))
														{
															die('error:'.mysqli_error($link));
														}  
											}
										echo'
										<div class="col-md-4 product-men mt-5">
											<div class="men-pro-item simpleCart_shelfItem">
												<div class="men-thumb-item text-center">
													<img src="../../php mysql stack/Product Table/'.$row2["productImage"].'" width="100px" height="201px" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.php" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product text-center border-top mt-4">
													<h4 class="pt-1">
														<a href="single.php">'.$row2["productName"].'</a>
													</h4>
													<div class="info-product-price my-2">
														<span class="item_price">$'.$row2["productMrp"].'</span>
														<del>$'.$row2["productMrp"].'</del>
													</div>
													<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
														<form action="'.$_SERVER['PHP_SELF'].'" method="post">
															<fieldset>
																<input type="hidden" name="name" value="'.$pip.'" />
																<input type="hidden" name="productid" value="'.$row2["id"].'" />
																<input type="hidden" name="quantity" value="1" />
																<input type="hidden" name="item_name" value="'.$row2["productName"].'" />
																<input type="hidden" name="amount" value="'.$row2["productMrp"].'" />
																<input type="hidden" name="discount_amount" value="1.00" />
																<input type="hidden" name="currency_code" value="USD" />
																<input type="hidden" name="return" value=" " />
																<input type="hidden" name="cancel_return" value=" " />
																<input type="submit" name="submit-crack'.$row2["id"].'" class="button btn-lg btn-primary" value="Add to cart">
															</fieldset>
														</form>
													</div>
												</div>
											</div>
										</div>
										';
											}
									?>
							</div>
						</div>
						<!-- //fourth section ends-->
					</div>
				</div>
				<!-- //product left ends-->

				<!-- product right starts-->
				<!--Top right section-->
				<!--Search Bar starts-->
				
					<!-- //product rightside khatam	 -->
				<?php include "right-bar.php"?>
			</div>
		</div>
	</div>
	<!-- //top products -->
	<!--Basic theory waala section-->
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
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" id="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " id="password" name="password" required="">
						</div>
						<div class="right-w3l">
							<button name="button" class="form-control">Log In</button>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
	<!--Basic theory khatam-->
	
<?php include "./footer.php"?>
