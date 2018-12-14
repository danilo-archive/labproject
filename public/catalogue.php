<?php
require_once('query_functions.php');
require_once('gameinfo.php');
require_once('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalogue | Indigo Team</title><!-- Icons and fonts-->
	<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet"><!-- Stylesheets -->

	<script src="js/jquery-3.2.1.slim.min.js" type="text/javascript">
	</script>
	<script src="js/bootstrap.min.js" type="text/javascript">
	</script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<?php $connection = db_connect(); ?>
</head>
<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header class="header__area header__absolute sticky__header" id="wn__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2">
						<div class="logo">
							<a href="index.html"><img alt="logo images" src="images/logo/logo.png"></a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block" style="position:relative; top:50px">
						<nav class="mainmenu__nav" id="navbar">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item">
									<a href="index.html" style="color: white; font-size:150%;">Home</a>
								</li>
								<li class="drop">
									<a href="catalogue.php" style="color: white; font-size:150%;">Catalogue</a>
								</li>
							</ul>
						</nav>
					</div>
					<div style="position:absolute; top:50px; right:50px;">
						<a href="login.php"><i class="fa fa-user" style="color :#ddd;font-size:40px"></i></a>
					</div>
				</div>
			</div>
		</header><!-- HEADER PICURE-->
		<div class="ht__bradcaump__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title" style="font-size:500%;">Catalogue</h2>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END HEADER -->
		<!-- SEARCHBAR -->
		<form action="#" class="search-wrapper">
			<input id="searchbox" placeholder="Search here..." required="" type="text"> <button type="submit">Search</button>
		</form><!-- END SEARCHBAR -->
		<!-- Start Catalogue Page -->
		<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<!--SORT BY GENRE SIDEBAR START-->
					<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
						<div class="shop__sidebar">
							<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title">Filter By Genre</h3>
								<ul>
									<li>
                                    <a onclick='' href='catalogue.php?filter=Action'>Action <span><?php $genre='Action'; echo count_genre($genre); ?></span></a>
									</li>
									<li>
                                    <a onclick='' href='catalogue.php?filter=Adventure'>Adventure <span><?php $genre='Adventure'; echo count_genre($genre) ?></span></a>
									</li>
									<li>
                                    <a onclick='' href='catalogue.php?filter=Strategy'>Strategy<span><?php $genre='Strategy'; echo count_genre($genre); ?></span></a>
									</li>
									<li>
                                    <a onclick='' href='catalogue.php?filter=Co-op'>Co-op <span><?php $genre='Co-op'; echo count_genre($genre); ?></span></a>
									</li>
                                    <li>
                                    <a onclick='' href='catalogue.php?filter=RPG'>RPG <span><?php $genre='RPG'; echo count_genre($genre); ?></span></a>
                                    </li>
								</ul>
							</aside>
						</div>
					</div><!--SORT BY GENRE SIDEBAR START-->
					<!--main catalogue page body start-->
					<div class="col-lg-9 col-12 order-1 order-lg-2">
						<!--SORT BY PLATFORM DROPDOWN START-->
						<div class="row">
							<div class="col-lg-12">
								<div role="tablist"></div>
								<div class="orderby__wrapper">
									<span>Sort By Platform</span> <select class="shot__byselect">
										<option>
											Default sorting
										</option>
										<option>
											PS4
										</option>
										<option>
											XBOX ONE
										</option>
										<option>
											PC
										</option>
									</select>
								</div><br>
							</div>
						</div><!--SORT BY PLATFORM DROPDOWN END-->
						<div class="tab__container">
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
								<div class="row" >
									<?php
                                        if(isset($_GET['filter'])){
                                            $filter =$_GET['filter'];
                                        }
                                        else{
                                            $filter = "";
                                        }
                                        get_games($filter);
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php db_disconnect($connection); ?>
</body>
</html>
