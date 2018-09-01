<?php
	include "backend/connect.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BinaryWorld</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #00d1ff!important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                <strong>BinaryWorld</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#modalContactForm">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="modal" data-target="#modalLRForm">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect">
                            <span class="badge red z-depth-1 mr-1 d-none "> </span>
                            <i class="fa fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                        </a>
          </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar !!!-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('img/macbook_pro_banner.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>MacBook Pro </strong>
                            </h1>

                            <h3 class="mb-4 d-none d-md-block">
                                <strong>More power. Power performance. More pro</strong>
                            </h3>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Learn More
                <i class="fa fa-shopping-cart ml-2"></i>
              </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide !!!-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('img/samsung_banner.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                  available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Learn More
                <i class="fa fa-shopping-cart ml-2"></i>
              </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide !!!-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('img/roc_banner.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                  available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                <i class="fa fa-shopping-cart ml-2"></i>
              </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide !!!-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper !!!-->

    <!--Main layout-->
    <main>
        <div class="container">
           
                        <!-- Search Links -->

                        <div class="clearfix">

                            <nav class="navbar navbar-dark float-right">
                                <form class="form-inline my-2 my-lg-0 ml-auto ">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
                                </form>
                            </nav>
                        </div>
                            <!-- Search Links END!!! -->


                            <!-- Section:Best selling Products  -->
                            <section class="text-center my-5">

                            <!-- Section heading -->
                            <h2 class="h1-responsive font-weight-bold text-center mt-5 mb-3">Our bestsellers</h2>
                            <!-- Section description -->
                            <p class="grey-text text-center w-responsive mx-auto mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

                            <!-- Carousel Wrapper -->
                            <div id="multi-item-example" class="carousel slide carousel-multi-item clearfix" data-ride="carousel">
                                <!-- Controls -->
                                <div class="controls-top mb-3">
                                <a class="btn myBlueBG waves-effect btn-sm" href="#multi-item-example" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <a class="btn myBlueBG waves-effect btn-sm" href="#multi-item-example" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                                </div>
                                <!-- Controls -->
                                <!-- Slides -->
                                <div class="carousel-inner " role="listbox">
                                <!-- First slide -->
                                <div class="carousel-item active ">
                                    <div class="col-md-4 mb-2 ">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="#" class="myBlue">Leather boots</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">69$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Jeans</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="#" class="myBlue">Slim jeans</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">99$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Shorts</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Denim shorts</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">49$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                </div>
                                <!-- First slide -->
                                <!-- Second slide -->
                                <div class="carousel-item ">
                                    <div class="col-md-4 mb-2">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Summer hat</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">39$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Black heels</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">79$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Outerwear</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Black jacket</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">149$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                </div>
                                <!-- Second slide -->
                                <!--Third slide -->
                                <div class="carousel-item ">
                                    <div class="col-md-4 mb-2">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Leather bag</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">29$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Leather belt</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">89$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top" alt="sample photo">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title my-4">
                                            <strong>
                                            <a href="" class="myBlue">Sneakers</a>
                                            </strong>
                                        </h4>
                                        <!-- Description -->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                        </p>
                                        <!-- Card footer -->
                                        <div class="card-footer px-1">
                                            <span class="float-left">129$</span>
                                            <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                                <i class="fa fa-eye ml-3"></i>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3"></i>
                                            </a>
                                            </span>
                                        </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                    </div>
                                </div>
                                <!--Third slide -->
                                </div>
                                <!-- Slides -->

                                <!-- Indicators -->
                                <ol class="carousel-indicators" style="bottom:-25px;">
                                    <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                                </ol>
                                <!-- Indicators -->
                            </div>
                            <!-- Carousel Wrapper -->

                            </section>
                            <!-- Section:Best Selling Products !!! -->


                            <!--Section: Main info-->
                            <section class="mt-5 wow fadeIn">

                                <!-- Main Grid row-->
                            <div class="row wow fadeIn">

                                <!-- Side Category column -->
                                <div class="col-lg-2 col-md-12 mb-4">
                                <nav class="navbar navbar-expand-lg navbar-light bg-white h-100 align-items-start">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                                    <ul class="nav nav-bar flex-column lighten-4 py-4 ">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#!">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#!">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#!">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#!">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                                </nav>
                                </div>  
                                <!-- Side Category column END!!!-->

                                <!-- Nested Grid row container -->
                                <div class="col-lg-10 mb-4">

                                    <!-- 1st Grid row -->
                                    <div class="row wow fadeIn">
                                        <!--Grid column-->
                                        <div class="col-lg-3 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
                                                    <a href="product-page.html">
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body text-center">
                                                    <!--Category & Title-->
                                                    <a href="" class="grey-text">
                                                        <h5>Shirt</h5>
                                                    </a>
                                                    <h5>
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Denim shirt
                                                                <span class="badge badge-pill danger-color">NEW</span>
                                                            </a>
                                                        </strong>
                                                    </h5>

                                                    <h4 class="font-weight-bold blue-text">
                                                        <strong>120$</strong>
                                                    </h4>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-3 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body text-center">
                                                    <!--Category & Title-->
                                                    <a href="" class="grey-text">
                                                        <h5>Sport wear</h5>
                                                    </a>
                                                    <h5>
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Sweatshirt</a>
                                                        </strong>
                                                    </h5>

                                                    <h4 class="font-weight-bold blue-text">
                                                        <strong>139$</strong>
                                                    </h4>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-3 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body text-center">
                                                    <!--Category & Title-->
                                                    <a href="" class="grey-text">
                                                        <h5>Sport wear</h5>
                                                    </a>
                                                    <h5>
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Grey blouse
                                                                <span class="badge badge-pill primary-color">bestseller</span>
                                                            </a>
                                                        </strong>
                                                    </h5>

                                                    <h4 class="font-weight-bold blue-text">
                                                        <strong>99$</strong>
                                                    </h4>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Last column-->
                                        <div class="col-lg-3 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body text-center">
                                                    <!--Category & Title-->
                                                    <a href="" class="grey-text">
                                                        <h5>Outwear</h5>
                                                    </a>
                                                    <h5>
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Black jacket</a>
                                                        </strong>
                                                    </h5>

                                                    <h4 class="font-weight-bold blue-text">
                                                        <strong>219$</strong>
                                                    </h4>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Last column END!!!-->

                                    </div>
                                    <!-- 1st Grid row END!!! -->

                                    <!-- 2st Grid row -->
                                    <div class="row wow fadeIn">  
                                    <!--Grid column-->
                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <!--Card-->
                                        <div class="card">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body text-center">
                                                <!--Category & Title-->
                                                <a href="" class="grey-text">
                                                    <h5>Shirt</h5>
                                                </a>
                                                <h5>
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Denim shirt
                                                            <span class="badge badge-pill danger-color">NEW</span>
                                                        </a>
                                                    </strong>
                                                </h5>

                                                <h4 class="font-weight-bold blue-text">
                                                    <strong>120$</strong>
                                                </h4>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <!--Card-->
                                        <div class="card">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body text-center">
                                                <!--Category & Title-->
                                                <a href="" class="grey-text">
                                                    <h5>Sport wear</h5>
                                                </a>
                                                <h5>
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Sweatshirt</a>
                                                    </strong>
                                                </h5>

                                                <h4 class="font-weight-bold blue-text">
                                                    <strong>139$</strong>
                                                </h4>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <!--Card-->
                                        <div class="card">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body text-center">
                                                <!--Category & Title-->
                                                <a href="" class="grey-text">
                                                    <h5>Sport wear</h5>
                                                </a>
                                                <h5>
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Grey blouse
                                                            <span class="badge badge-pill primary-color">bestseller</span>
                                                        </a>
                                                    </strong>
                                                </h5>

                                                <h4 class="font-weight-bold blue-text">
                                                    <strong>99$</strong>
                                                </h4>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Grid column-->

                                    <!--Last column-->
                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <!--Card-->
                                        <div class="card">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--Card image-->

                                            <!--Card content-->
                                            <div class="card-body text-center">
                                                <!--Category & Title-->
                                                <a href="" class="grey-text">
                                                    <h5>Outwear</h5>
                                                </a>
                                                <h5>
                                                    <strong>
                                                        <a href="" class="dark-grey-text">Black jacket</a>
                                                    </strong>
                                                </h5>

                                                <h4 class="font-weight-bold blue-text">
                                                    <strong>219$</strong>
                                                </h4>

                                            </div>
                                            <!--Card content-->

                                        </div>
                                        <!--Card-->

                                    </div>
                                    <!--Last column END!!!-->

                                    </div>
                                    <!-- 2st Grid row END!!! -->


                                </div>
                                <!-- Nested Grid row container END!!! -->

                            <!-- Grid column container END!!! -->
                            </div>
                                <!--Grid row-->

                            </section>
                            <!--Section: Main info-->

                            <!--Pagination-->
                            <nav class="d-flex justify-content-center wow fadeIn">
                                <ul class="pagination pg-bluegrey">

                                <!--Arrow left-->
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1
                                    <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                </ul>
                            </nav>
                            <!--Pagination-->          

        </div>
    </main>
<!--/Main layout !!!-->

    <!-- /Modal Contact !!! -->
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Your name</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Your email</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">Subject</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Your message</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn myBlueBG">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
        </div>
    <!-- /Modal Contact !!! -->

    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2  darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
                                <i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab">
                                <i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                              <form action="LogInCheck.php" method="POST">
                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput10" name="email" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" name="psrd" id="modalLRInput11" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn myBlueBG">Log in
                                        <i class="fa fa-sign-in ml-1"></i>
                                    </button>
                                </div>
<!--                                 <div class="form-group">
      Email: <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      Password: <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="psrd">
    </div>
       <button type="submit" class="btn btn-dark">Submit</button> -->
                            </form>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member?
                                        <a href="#" class="blue-text">Sign Up</a>
                                    </p>
                                    <p>Forgot
                                        <a href="#" class="blue-text">Password?</a>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                              <form action="userRegister.php" method="POST">
                                 <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="text" name="usrname" id="modalLRInput14" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">User Name</label>
                                </div>
                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" name="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" name="psrd" id="modalLRInput13" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                                </div>

<!--                                 <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                                </div> -->

                                <div class="text-center form-sm mt-2">
                                    <button type="submit"class="btn myBlueBG">Sign up
                                        <i class="fa fa-sign-in ml-1"></i>
                                    </button>
                                </div>
                              </form>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account?
                                        <a href="#" class="blue-text">Log In</a>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--/Modal: Login / Register Form !!!-->


    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #2980B9;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fa fa-facebook white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                    <hr class="myBlueBG accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="myBlueBG accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="myBlueBG accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="myBlueBG accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright
        </div>
        <!-- Copyright -->

    </footer>
<!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js">
    </script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>
</body>

</html>