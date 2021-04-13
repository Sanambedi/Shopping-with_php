<?php
	session_start();
	if(!empty($_SESSION['aid'])){
		$pip = $_SESSION['aid'];
	}
	else{
		$pip=0;
	}
?>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<script>
		function checkemail(str){
			if(str=="")
			{
				document.getElementById("errmsg").innerHTML="";
				return;
			}
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("errmsg").innerHTML=xmlhttp.responseText;
				}
			}
			alert (str);
			xmlhttp.open("GET", "checkemail.php?email="+ str,true);
			xmlhttp.send();
		}
		function checkpassword (str){
			if(str==""){
				document.getElementById("errmsg").innerHTML="";
				return;
			}
			if(window.XMLHttpRequest){
				xmlhttp = new XMLhttpRequest();
			}
			else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.onreadyState == 4 && xmlhttp.status == 200){
					document.getElementById("errmsg").innerHTML = xmlhttp.responseText;
				}

			}
			
		}
	</script>
	</head>

<body>
<!-- top-header -->
	<!-- Top Navbar starts-->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<!-- Left aligned tags starts -->
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<!--Left aligned tag ends-->
				<!--Right aligned tag starts-->
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<?php
							if(empty($_SESSION['uid'])){
								echo '<li class="text-center border-right text-white">
								<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
									<i class="fas fa-truck mr-2"></i>Track Order</a>
							</li>';
							}
							else{
								echo '<li class="text-center border-right text-white">
								<a href="#"  class="text-white">
									<i class="fas fa-truck mr-2"></i>Track Order</a>
							</li>';
							}
						?>
						<li class="text-center border-right text-white">
							<a style="cursor:pointer;"><i class="fas fa-phone mr-2"></i> 9888163622</a>
						</li>
						<?php
							if(empty($_SESSION['uid'])){
								echo '<li class="text-center border-right text-white">
								<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
									<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
							</li>
							<li class="text-center text-white">
								<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
									<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
							</li>';
							}
							else{
								$name = $_SESSION['uid'];
								echo"
									<li class='text-center border-right text-white'>
										<a href='#' data-toggle='modal' data-target='#exampleModal' class='text-white'>
											<i class='fa fa-user mr-2'></i>Hello ".$name."</a>
									</li>
									<li class='text-center text-white'>
										<a href='./Signout.inc.php' class='text-white'>
											<i class='fa fa-sign-out-alt mr-2'></i>Sign Out</a>
									</li>";
							}	
						?>
					</ul>
					<!-- //header lists -->
				</div>
				<!-- Right aligned tag ends -->
			</div>
		</div>
	</div>
	<!-- Navbar ends -->

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
				<!--List class dropdown-->
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					<option>Phoenix</option>
					<option>Little Rock</option>
					<option>Los Angeles</option>
					<option>Denver</option>
					<option>Bridgeport</option>
					<option>Wilmington</option>
					<option>Jacksonville</option>
					<option>Atlanta</option>
					<option>Honolulu</option>
					<option>Boise</option>
					<option>Chicago</option>
					<option>Indianapolis</option>
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					<option>Mobile</option>
					<option>Huntsville</option>
					<option>Tuscaloosa</option>
				</optgroup>
				<optgroup label="Alaska">
					<option>Anchorage</option>
					<option>Fairbanks</option>
					<option>Juneau</option>
					<option>Sitka</option>
					<option>Ketchikan</option>
				</optgroup>
				<optgroup label="Arizona">
					<option>Phoenix</option>
					<option>Tucson</option>
					<option>Mesa</option>
					<option>Chandler</option>
					<option>Glendale</option>
				</optgroup>
				<optgroup label="Arkansas">
					<option>Little Rock</option>
					<option>Fort Smith</option>
					<option>Fayetteville</option>
					<option>Springdale</option>
					<option>Jonesboro</option>
				</optgroup>
				<optgroup label="California">
					<option>Los Angeles</option>
					<option>San Diego</option>
					<option>San Jose</option>
					<option>San Francisco</option>
					<option>Fresno</option>
				</optgroup>
				<optgroup label="Colorado">
					<option>Denver</option>
					<option>Colorado</option>
					<option>Aurora</option>
					<option>Fort Collins</option>
					<option>Lakewood</option>
				</optgroup>
				<optgroup label="Connecticut">
					<option>Bridgeport</option>
					<option>New Haven</option>
					<option>Hartford</option>
					<option>Stamford</option>
					<option>Waterbury</option>
				</optgroup>
				<optgroup label="Delaware">
					<option>Wilmington</option>
					<option>Dover</option>
					<option>Newark</option>
					<option>Bear</option>
					<option>Middletown</option>
				</optgroup>
				<optgroup label="Florida">
					<option>Jacksonville</option>
					<option>Miami</option>
					<option>Tampa</option>
					<option>St. Petersburg</option>
					<option>Orlando</option>
				</optgroup>
				<optgroup label="Georgia">
					<option>Atlanta</option>
					<option>Augusta</option>
					<option>Columbus</option>
					<option>Savannah</option>
					<option>Athens</option>
				</optgroup>
				<optgroup label="Hawaii">
					<option>Honolulu</option>
					<option>Pearl City</option>
					<option>Hilo</option>
					<option>Kailua</option>
					<option>Waipahu</option>
				</optgroup>
				<optgroup label="Idaho">
					<option>Boise</option>
					<option>Nampa</option>
					<option>Meridian</option>
					<option>Idaho Falls</option>
					<option>Pocatello</option>
				</optgroup>
				<optgroup label="Illinois">
					<option>Chicago</option>
					<option>Aurora</option>
					<option>Rockford</option>
					<option>Joliet</option>
					<option>Naperville</option>
				</optgroup>
				<optgroup label="Indiana">
					<option>Indianapolis</option>
					<option>Fort Wayne</option>
					<option>Evansville</option>
					<option>South Bend</option>
					<option>Hammond</option>
				</optgroup>
				<optgroup label="Iowa">
					<option>Des Moines</option>
					<option>Cedar Rapids</option>
					<option>Davenport</option>
					<option>Sioux City</option>
					<option>Waterloo</option>
				</optgroup>
				<optgroup label="Kansas">
					<option>Wichita</option>
					<option>Overland Park</option>
					<option>Kansas City</option>
					<option>Topeka</option>
					<option>Olathe </option>
				</optgroup>
				<optgroup label="Kentucky">
					<option>Louisville</option>
					<option>Lexington</option>
					<option>Bowling Green</option>
					<option>Owensboro</option>
					<option>Covington</option>
				</optgroup>
				<optgroup label="Louisiana">
					<option>New Orleans</option>
					<option>Baton Rouge</option>
					<option>Shreveport</option>
					<option>Metairie</option>
					<option>Lafayette</option>
				</optgroup>
				<optgroup label="Maine">
					<option>Portland</option>
					<option>Lewiston</option>
					<option>Bangor</option>
					<option>South Portland</option>
					<option>Auburn</option>
				</optgroup>
				<optgroup label="Maryland">
					<option>Baltimore</option>
					<option>Frederick</option>
					<option>Rockville</option>
					<option>Gaithersburg</option>
					<option>Bowie</option>
				</optgroup>
				<optgroup label="Massachusetts">
					<option>Boston</option>
					<option>Worcester</option>
					<option>Springfield</option>
					<option>Lowell</option>
					<option>Cambridge</option>
				</optgroup>
				<optgroup label="Michigan">
					<option>Detroit</option>
					<option>Grand Rapids</option>
					<option>Warren</option>
					<option>Sterling Heights</option>
					<option>Lansing</option>
				</optgroup>
				<optgroup label="Minnesota">
					<option>Minneapolis</option>
					<option>St. Paul</option>
					<option>Rochester</option>
					<option>Duluth</option>
					<option>Bloomington</option>
				</optgroup>
				<optgroup label="Mississippi">
					<option>Jackson</option>
					<option>Gulfport</option>
					<option>Southaven</option>
					<option>Hattiesburg</option>
					<option>Biloxi</option>
				</optgroup>
				<optgroup label="Missouri">
					<option>Kansas City</option>
					<option>St. Louis</option>
					<option>Springfield</option>
					<option>Independence</option>
					<option>Columbia</option>
				</optgroup>
				<optgroup label="Montana">
					<option>Billings</option>
					<option>Missoula</option>
					<option>Great Falls</option>
					<option>Bozeman</option>
					<option>Butte-Silver Bow</option>
				</optgroup>
				<optgroup label="Nebraska">
					<option>Omaha</option>
					<option>Lincoln</option>
					<option>Bellevue</option>
					<option>Grand Island</option>
					<option>Kearney</option>
				</optgroup>
				<optgroup label="Nevada">
					<option>Las Vegas</option>
					<option>Henderson</option>
					<option>North Las Vegas</option>
					<option>Reno</option>
					<option>Sunrise Manor</option>
				</optgroup>
				<optgroup label="New Hampshire">
					<option>Manchesters</option>
					<option>Nashua</option>
					<option>Concord</option>
					<option>Dover</option>
					<option>Rochester</option>
				</optgroup>
				<optgroup label="New Jersey">
					<option>Newark</option>
					<option>Jersey City</option>
					<option>Paterson</option>
					<option>Elizabeth</option>
					<option>Edison</option>
				</optgroup>
				<optgroup label="New Mexico">
					<option>Albuquerque</option>
					<option>Las Cruces</option>
					<option>Rio Rancho</option>
					<option>Santa Fe</option>
					<option>Roswell</option>
				</optgroup>
				<optgroup label="New York">
					<option>New York</option>
					<option>Buffalo</option>
					<option>Rochester</option>
					<option>Yonkers</option>
					<option>Syracuse</option>
				</optgroup>
				<optgroup label="North Carolina">
					<option>Charlotte</option>
					<option>Raleigh</option>
					<option>Greensboro</option>
					<option>Winston-Salem</option>
					<option>Durham</option>
				</optgroup>
				<optgroup label="North Dakota">
					<option>Fargo</option>
					<option>Bismarck</option>
					<option>Grand Forks</option>
					<option>Minot</option>
					<option>West Fargo</option>
				</optgroup>
				<optgroup label="Ohio">
					<option>Columbus</option>
					<option>Cleveland</option>
					<option>Cincinnati</option>
					<option>Toledo</option>
					<option>Akron</option>
				</optgroup>
				<optgroup label="Oklahoma">
					<option>Oklahoma City</option>
					<option>Tulsa</option>
					<option>Norman</option>
					<option>Broken Arrow</option>
					<option>Lawton</option>
				</optgroup>
				<optgroup label="Oregon">
					<option>Portland</option>
					<option>Eugene</option>
					<option>Salem</option>
					<option>Gresham</option>
					<option>Hillsboro</option>
				</optgroup>
				<optgroup label="Pennsylvania">
					<option>Philadelphia</option>
					<option>Pittsburgh</option>
					<option>Allentown</option>
					<option>Erie</option>
					<option>Reading</option>
				</optgroup>
				<optgroup label="Rhode Island">
					<option>Providence</option>
					<option>Warwick</option>
					<option>Cranston</option>
					<option>Pawtucket</option>
					<option>East Providence</option>
				</optgroup>
				<optgroup label="South Carolina">
					<option>Columbia</option>
					<option>Charleston</option>
					<option>North Charleston</option>
					<option>Mount Pleasant</option>
					<option>Rock Hill</option>
				</optgroup>
				<optgroup label="South Dakota">
					<option>Sioux Falls</option>
					<option>Rapid City</option>
					<option>Aberdeen</option>
					<option>Brookings</option>
					<option>Watertown</option>
				</optgroup>
				<optgroup label="Tennessee">
					<option>Memphis</option>
					<option>Nashville</option>
					<option>Knoxville</option>
					<option>Chattanooga</option>
					<option>Clarksville</option>
				</optgroup>
				<optgroup label="Texas">
					<option>Houston</option>
					<option>San Antonio</option>
					<option>Dallas</option>
					<option>Austin</option>
					<option>Fort Worth</option>
				</optgroup>
				<optgroup label="Utah">
					<option>Salt Lake City</option>
					<option>West Valley City</option>
					<option>Provo</option>
					<option>West Jordan</option>
					<option>Orem</option>
				</optgroup>
				<optgroup label="Vermont">
					<option>Burlington</option>
					<option>Essex</option>
					<option>South Burlington</option>
					<option>Colchester</option>
					<option>Rutland</option>
				</optgroup>
				<optgroup label="Virginia">
					<option>Virginia Beach</option>
					<option>Norfolk</option>
					<option>Chesapeake</option>
					<option>Arlington</option>
					<option>Richmond</option>
				</optgroup>
				<optgroup label="Washington">
					<option>Seattle</option>
					<option>Spokane</option>
					<option>Tacoma</option>
					<option>Vancouver</option>
					<option>Bellevue</option>
				</optgroup>
				<optgroup label="West Virginia">
					<option>Charleston</option>
					<option>Huntington</option>
					<option>Parkersburg</option>
					<option>Morgantown</option>
					<option>Wheeling</option>
				</optgroup>
				<optgroup label="Wisconsin">
					<option>Milwaukee</option>
					<option>Madison</option>
					<option>Green Bay</option>
					<option>Kenosha</option>
					<option>Racine</option>
				</optgroup>
				<optgroup label="Wyoming">
					<option>Cheyenne</option>
					<option>Casper</option>
					<option>Laramie</option>
					<option>Gillette</option>
					<option>Rock Springs</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--List dropdown ends-->
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<!--Sign In Sign Out form-->
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
	<!--Sign In Sign Out form ends -->
	<!-- register popup -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php 
        			include "./connection.php" ;
        			if(isset($_POST['button'])){
					$sql = "INSERT INTO usertable (name,email,password,confirmPassword,phoneNumber)
					VALUES ('$_POST[name]',
							'$_POST[email]',
							'$_POST[password]',
							'$_POST[confirmPassword]',
							'$_POST[phoneNumber]')";
					if(!mysqli_query($link, $sql))
					{
						die('error:'.mysqli_error($link));
					}         
				}
    			?>
				<div class="modal-body">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder="Your Name " name="name" required="true">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" onblur=checkemail(this.value) placeholder="Your Email" name="email" id="txtemail" required="true" >
							<div id="errmsg">Demo</div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Phone Number</label>
							<input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber" required="true">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" id="password" minlength="8" required="true">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword" minlength="8" onblur=checkpassword(this.value) id="confirmPassword">
						</div>
						<div class="right-w3l">
							<button class="btn btn-danger btn-lg btn-block" name="button">Submit</button>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2" required="true">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--Register popup ends-->
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<!-- Image and text heading of second navbar -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required><!--Searchbar-->
								<button class="btn my-2 my-sm-0" type="submit">Search</button><!--Search submit button-->
							</form>
						</div>
						<!-- //search -->
						<!-- cart details start -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
										<?php 
										echo '<button class="btn w3view-cart" type="submit" name="submit" value="">
												<i class="fas fa-cart-arrow-down"></i>';
													$sql = "SELECT * FROM tabcart where customer_id='$pip'";
													$result = mysqli_query($link,$sql);
													$numbers=0;
													while($row = mysqli_fetch_array($result)){
														$numbers++;	
													}
											echo '<span class="badge badge-warning">'.$numbers.'</span>'
										?>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details end-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<!--Navigation bar part 3 with dropdown waali-->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<!--All category waali dropdown-->
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
						<!--All category waali dropdown khatam-->
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">	
								
							</a>
						</li>
						<!--Electronics waali dropdown-->

						<?php
			                $sql = "SELECT * from categorytable where mainCategory='Main'";
							
							$result= mysqli_query($link,$sql);
							while($row=mysqli_fetch_array($result)){
								$mainCategory=$row['id'];
								$sql1 = "SELECT * from categorytable where mainCategory='".$mainCategory."' and parentCategory='None'";
								
								
								echo '<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
												.$row['categoryName'].
											'</a>
											<div class="dropdown-menu">
												<div class="agile_inner_drop_nav_info p-4">
												<h5 class="mb-3">
													';
														$result1 = mysqli_query($link,$sql1);
														while($row1 = mysqli_fetch_array($result1)){
															$parentCategory = $row1['categoryName'];
															echo $parentCategory.'    ';
														
													echo'
												</h5>
												<div class="row">
												';
												echo '<div class="col-sm-6 multi-gd-img">
														<ul class="multi-column-dropdown">
															<li>
																<a href="product.php">';
																	$parentId=$row1['id'];																
																	$sql2 = "SELECT * from categorytable where mainCategory='".$mainCategory."' and parentCategory='".$parentId."'";
																	$result2 = mysqli_query($link,$sql2);
																	while($row2 = mysqli_fetch_array($result2)){
																		$category = $row2['categoryName'];
																		echo $category.' ';
																	}
																echo '</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>';
								}
							}

						?>



						
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!--Third navigation bar khatam-->
	<!-- //navigation -->

	