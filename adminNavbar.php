<?php

//require('adminLoginfunction.php');

    echo'

        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>futureFones || ADMIN</title>
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
                            <a href="adminaccount.php" class="nav-link" aria-current="page"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/house-fill.svg">WEB STATUS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-right.svg">MORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="customers.php" class="dropdown-item">CUSTOMERS</a></li>
                                <li><a href="allOrders.php" class="dropdown-item">ALL ORDERS</a></li>
                                <li><a href="#" class="dropdown-item">NEW ORDERS</a></li>
                                <li><a href="items.php" class="dropdown-item">ITEMS</a></li>
                                <li><a href="deleteItem.php" class="dropdown-item">REMOVE ITEM</a></li>
                                <li><a href="addnewitem.php" class="dropdown-item">ADD NEW ITEM</a></li>
                                <li><a href="#" class="dropdown-item">ACCOUNT STATUS</a></li>
                                <li><a href="#" class="dropdown-item">PENDING PAYMENT</a></li>
                                <li><a href="#cart" class="dropdown-item">PAYMENT PROOFS</a></li>
                                <li><a href="#" class="dropdown-item">PAYMENT STATUS(ATM)</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="util.php?logout=getOut" class=" btn btn-danger btn-large btn-block" style="margin-left: 12px; "> <img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-bar-right.svg">LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul>

                   <h3 id="header" class="text-white">WELCOME BACK '.$_SESSION['USERNAME'].'</h3>


                </div>
                
            </div>
        </nav>

    '
?>