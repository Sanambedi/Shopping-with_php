<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Appliances :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>


	<?php include"./header.php"?>

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

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
					<li>Appliances</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid  py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>T</span>v
				<span>&</span>
				<span>A</span>ppliances</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<div class="row">
						<?php
							$sql = "SELECT * FROM producttable";
							$result= mysqli_query($link,$sql);
							$i=0;
							while($row=mysqli_fetch_array($result)){
								if($i<12){
									if($row%3==2 && $row/3<=3){
										echo'
											<div class="col-md-4 product-men">
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
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="'.$row["productName"].'" />
																	<input type="hidden" name="amount" value="'.$row["productMrp"].'" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button btn" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</div>									
										</div>
									</div>
									<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
	
										<div class="row">
									';}
									else if($row%3!=2 || $row/3>=3){
										echo'<div class="col-md-4 product-men">
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
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="'.$row["productName"].'" />
															<input type="hidden" name="amount" value="'.$row["productMrp"].'" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<input type="submit" name="submit" value="Add to cart" class="button btn" />
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>';
									}
								}
								else{
									break;
								}
								$i++;
							 	
							}
							
						?>
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<?php include "right-bar.php";?>
				<!-- //product right -->
			</div>
		</div>
	</div>
	<!-- //top products -->

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

	<!-- footer -->
	<?php include"./footer.php" ?>