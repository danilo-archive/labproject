<?php
require_once('query_functions.php');
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
									<a href="catalogue.html" style="color: white; font-size:150%;">Catalogue</a>
								</li>
							</ul>
						</nav>
					</div>
					<div style="position:absolute; top:50px; right:50px;">
						<a href="login.html"><i class="fa fa-user" style="color :#ddd;font-size:40px"></i></a>
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
										<a href="#">Action <span><?php echo count_genre("Action") ?></span></a>
									</li>
									<li>
										<a href="#">Adventure <span><?php echo count_genre("Adventure") ?></span></a>
									</li>
									<li>
										<a href="#">Indie<span><?php echo count_genre("Indie") ?></span></a>
									</li>
									<li>
										<a href="#">Co-op <span><?php echo count_genre("Co-op") ?></span></a>
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
								<div class="row">
									<!-- Start Single Product -->
									<ul class="rating flex-column">
										<li class="on">
											<a class="fab fa-xbox"></a>
										</li>
										<li class="on">
											<a class="fab fa-playstation"></a>
										</li>
										<li class="on">
											<a class="fa fa-desktop"></a>
										</li>
									</ul>
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<!--Change data target to reflect the right details modal-->
											<a class="first__img" data-target="#modalID" data-toggle="modal" href="single-product.html"><img alt="product image" src="images/game_icons/7.jpg"></a>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">Grand Theft Auto V</a></h4>
											<ul class="prize d-flex">
												<li>£5.00 per day</li>
											</ul>
											<div class="action">
												<div class="product__hover">
													<ul class="rating d-flex">
														<li class="on"><i class="fa fa-star"></i></li>
														<li class="on"><i class="fa fa-star"></i></li>
														<li class="on"><i class="fa fa-star"></i></li>
														<li class="on"><i class="fa fa-star"></i></li>
														<li class="on"><i class="fa fa-star"></i></li>
													</ul>
												</div>
											</div>
										</div><!-- Start Product details Modal
                                            (CHANGE ID HERE AND IN data-target"" !!)
                                            This should also go in a separate file with php,possibly together with the entire
                                            product
                                        -->
										<div aria-hidden="true" aria-labelledby="modalLabel" class="modal fade" id="modalID" role="dialog" tabindex="-1">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="modalLabel">Grand Theft Auto V</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body">
														<br>
														<!-- Availability Flag (change color to red when not available) -->
														<div style=" text-align: center; font-size: 30px; color: green;">
															<i class="fas fa-flag"></i> <b>AVAILABLE</b>
														</div><br>
														<div><img src="images/game_icons/7.jpg" style="width: 100%; height:100%;"></div><!-- Start info table -->
														<div>
															<table class="table">
																<thead>
																	<tr>
																		<th scope="col">#ID</th>
																		<th scope="col">Year</th>
																		<th scope="col">Publisher</th>
																		<th scope="col">Genre</th>
																		<th scope="col">Platforms</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1</th>
																		<td>2016</td>
																		<td>Rockstar Games</td>
																		<td>Action</td>
																		<td>XBOX, PS4, PC</td>
																	</tr>
																</tbody>
															</table>
														</div><!-- End info table-->
														<br>
														<br>
														<!-- Start Description-->
														<div>
															<h5>THE GAME</h5><br>
															<p style="font-size:18px;">Los Santos is a city of bright lights, long nights and dirty secrets, and they don’t come brighter, longer or dirtier than in GTA Online: After Hours. The party starts now.</p>
														</div><!-- End Description-->
														<br>
														<br>
														<!-- Start links to reviews-->
														<div>
															<h5>REVIEW LINKS <i class="fas fa-link"></i></h5><br>
															<ul class="list-group .list-group-flush">
																<li class="list-group-item">
																	<a href="https://uk.ign.com/games/grand-theft-auto-v" style="font-size:16px;" target="_blank"><b>IGN &nbsp;&nbsp;&nbsp;</b> <i class="fas fa-star-half-alt"></i></a>
																</li>
															</ul>
														</div><!-- End links to reviews-->
													</div>
													<div class="modal-footer">
														<button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
													</div>
												</div>
											</div>
										</div><!-- End Product details Modal-->
										<!-- End Single Product -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
