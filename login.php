<!DOCTYPE html>
<?php require_once('submit_login_form.php');
//if(isset($_POST['submitted']))
//{
//    if($fgmembersite->Login())
//    {
//        $fgmembersite->RedirectToURL("staff.html");
//    }
//}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Login | Indigo Team</title><!-- Icons and fonts-->
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
									<a href="catalogue.php" style="color: white; font-size:150%;">Catalogue</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header><!-- HEADER PICURE-->
		<div class="ht__bradcaump__area bg-image--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-left">
							<h2 class="bradcaump-title" style="font-size:500%;">Login</h2>
						</div>
					</div>
                    <?php Login(); ?>
					<form action='login.php' method="post">>
						<br>
						<br>
						<br>
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" name="email" placeholder="Email" type="text"> <span class="focus-input100"></span> <span class="symbol-input100"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" name="pass" placeholder="Password" type="password"> <span class="focus-input100"></span> <span class="symbol-input100"></span>
						</div>
						<div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="submit" value="Login">
						</div>
                        <?php ?>
						<form></form>
					</form>
				</div>
			</div>
		</div><!-- End HEADER PICURE -->
	</div>
</body>
</html>
