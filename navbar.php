<?php
 //session_start();
    echo'
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>futureFones || USER</title>
        <link rel="icon" href="images/flogo.png">
        <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    </head>
    <body>

    <!-- navbar -->
        <nav id="nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">

                <a href="#" class="navbar-brand">
                    <img class="img-fluid" src="images/logo.png" style="width: 85px;">
                    futureFones
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle-navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div style="border: none;" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="phone.php" class="nav-link active" aria-current="page"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/house-fill.svg">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-right.svg">MORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="phone.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/phone-fill.svg">PHONES</a></li>
                                <li><a href="order.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bookmark-dash-fill.svg">ORDERS</a></li>
                                <li><a href="#" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bookmark-dash-fill.svg">ORDER STATUS</a></li>
                                <li><a href="#" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">ACCOUNT</a></li>
                                <li><a href="#cart" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-fill.svg">CARTS</a></li>
                                <li><a href="#" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bell-fill.svg">NOTIFICATION</a></li>
                                <li><a href="#" class="dropdown-item">  <img id="dropImg" class="img-fluid" src="images/service.png">SUPPORT</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="util.php?lgt=out" class=" btn btn-danger btn-large btn-block" style="margin-left: 12px; "> <img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-bar-right.svg">LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul>

                    <h3 style="magin-left: -35%;" class="text-white">Welcome Back '.$_SESSION['FNAME'].' '.$_SESSION['LNAME'].'</h3 style="magin-left: -10%;">



                    <form class="d-flex" action="searchPage.php" method="POST">
                        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                        <button name="subsearch" id="menuBtn" class="btn btn-small" type="submit"><img id="dropImg" style="width: 20px;" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/search.svg"></button>
                    </form>

                </div>
                <!-- first div end here -->
            </div>
        </nav>
    '
?>