<?php
require_once('query_functions.php');
?>
<!doctype html>
<html lang"en">
   <head>
      <meta charset="utf-8">
      <title>Catalogue | Indigo Team</title>
      <!-- Icons and fonts-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/elements.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <!-- Main wrapper -->
      <div class="wrapper" id="wrapper">
      <!-- Header -->
      <header id="wn__header" class="header__area header__absolute sticky__header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-2">
                  <div class="logo">
                     <a href="index.html">
                     <img src="images/logo/logo.png" alt="logo images">
                     </a>
                  </div>
               </div>
               <div class="col-lg-8 d-none d-lg-block" style="position:relative; top:50px">
                  <nav id="navbar" class="mainmenu__nav">
                     <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a style="color: white; font-size:150%;" href="index.html">Home</a></li>
                        <li class="drop"><a style="color: white;  font-size:150%;" href="catalogue.html">Catalogue</a></li>
                     </ul>
                  </nav>
               </div>
               <div style="position:absolute; top:50px; right:50px;">
                  <a href="login.html">
                  <i class="fa fa-user" style="color :#ddd;font-size:40px";></i>
                  </a>
               </div>
            </div>
         </div>
      </header>
      <!-- //Header -->
      <!-- HEADER PICURE-->
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
      </div>
      <!-- END HEADER -->
      <!-- SEARCHBAR -->
      <form action="#" class="search-wrapper">
         <input id="searchbox" type="text" placeholder="Search here..." required="">
         <button type="submit">Search</button>
      </form>
      <!-- END SEARCHBAR -->
      <!-- Start Catalogue Page -->
      <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
      <div class="container">
      <div class="row">
      <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
         <div class="shop__sidebar">
            <aside class="wedget__categories poroduct--cat">
            <h3 class="wedget__title">Filter By Genre</h3>
            <ul>
               <li><a href="#">Action <span><?php echo count_genre("Action") ?></span></a></li>
               <li><a href="#">Adventure <span><?php echo count_genre("Adventure") ?></span></a></li>
               <li><a href="#">Indie<span><?php echo count_genre("Indie") ?></span></a></li>
               <li><a href="#">Co-op <span><?php echo count_genre("Co-op") ?></span></a></li>
            </ul>
         </div>
      </div>
      <div class="col-lg-9 col-12 order-1 order-lg-2">
      <div class="row">
         <div class="col-lg-12">
            <div role="tablist">
            </div>
            <div class="orderby__wrapper">
               <span>Sort By Platform</span>
               <select class="shot__byselect">
                  <option>Default sorting</option>
                  <option>PS4</option>
                  <option>XBOX ONE</option>
                  <option>PC</option>
               </select>
            </div>
            </br>
         </div>
      </div>
      <div class="tab__container">
      <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
      <div class="row">
      <!-- Start Single Product -->
      <ul class="rating flex-column">
         <li class="on"><a class="fab fa-xbox"></a></li>
         <li class="on"><a class="fab fa-playstation"></a></li>
         <li class="on"><a class="fa fa-desktop"></a></li>
      </ul>
      <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="product__thumb">
         <a class="first__img" href="single-product.html"><img src="images/game_icons/7.jpg" alt="product image"></a>
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
                  <li class ="on"><i class="fa fa-star"></i></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- End Single Product -->
   </body>
</html>
