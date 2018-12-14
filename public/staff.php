<?php require_once('db.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Secretary Page | Indigo Team</title><!-- Icons and fonts-->
	<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet"><!-- Stylesheets -->
	<script src="js/jquery-3.2.1.slim.min.js" type="text/javascript">
	</script>
	<script src="js/popper.min.js" type="text/javascript">
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
		</header><!-- HEADER PICTURE-->
		<div class="ht__bradcaump__area bg-image--4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title" style="font-size:500%;">SECRETARY PAGE</h2>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END HEADER  -->
		<br>
		<br>
		<div class="panel heading">
			<center>
				<p>CURRENTLY LOGGED IN AS:</p><!--<h1><i class="fa fa-hammer"></i> SECRETARY</h1>-->
				<h2>John Smith</h2>
			</center>
		</div>
		<div class="container">
			<div class="row">
				<!--USER LIST-->
				<div class="col-sm">
					<br>
					<br>
					<br>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">USERS</h2>
							</div><!-- START MODAL RENTAL
                                THE ID OF THIS MODAL IS REFERRING TO THE FIRST USER ONLY. THIS HAS TO BE GENERATED AUTOMATICALLY
                            -->
							<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="userModal1" role="dialog" tabindex="-1">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">MANAGE USER</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<br>
											<!-- Availability Flag (change color to red when not available) -->
											<div style=" text-align: center; font-size: 30px; color: blue;">
												<b>SECRETARY</b>
												<p>John Smith</p>
											</div><br>
											<br>
											<br>
											<!-- Start user type change option-->
											<center>
												<div style="font-size:18px;">
													<div class="btn-group .col-md-6">
														<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">CHANGE USER TYPE</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Volunteer</a> <a class="dropdown-item" href="#">Member</a> <!-- ONLY SHOW SECRETARY IF POSSIBLE! -->
															<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Secretary</a>
														</div>
													</div>
												</div>
											</center><!-- End user type change option-->
											<br>
											<br>
											<!-- Start ban user-->
											<!-- End ban user-->
										</div>
										<div class="modal-footer">
											<button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
										</div>
									</div>
								</div>
							</div><!-- END MODAL RENTAL-->
							<div class="panel-body">
								<table class="table-users table">
									<tbody>
                                    <?php get_users();?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--END USER LIST-->
				<!--BOOKINGS LIST-->
				<div class="col-sm">
					<br>
					<br>
					<br>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">RENTALS</h2>
							</div>
							<div class="panel-body">
								<!-- START MODAL RENTAL
                                THE ID OF THIS MODAL IS REFERRING TO THE FIRST RENTAL ONLY. THIS HAS TO BE GENERATED AUTOMATICALLY
                            -->
								<!-- END MODAL RENTAL-->
								<table class="table-users table">
									<tbody>
										<!-- START rental-->
                                        <?php get_rentals();?>
										</tr><!-- END rental-->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--END RENTALS LIST-->
			</div>
		</div>
	</div>
</body>
</html>
