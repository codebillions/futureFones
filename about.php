<?php

?>


<style>
 * {
    margin: 0;
    padding: 0;
    font-family: 'Dessau', 'Die Nasty';
    box-sizing: border-box; 
}

html {
    scroll-behavior: smooth black;
}

/* navbar */
#nav{
    background: rgb(5, 31, 0);
}

#menuImg{
    width: 25px;
    margin-right: 8px;
    margin-top: -5px;
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
}

#dropImg{
     width: 25px;
    margin-right: 8px;
    margin-top: -5px;
    filter: invert(1) sepia(1) saturate(-10) hue-rotate(275deg); 
}

#menuBtn{
    background: rgb(223, 226, 17);
}

#about{
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

#about img{
    object-fit: cover;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}

.callout{
    position: relative;
    display: block;
    align-items: center;
    height: 100%;
    z-index: 10;
    margin-top: 130px;
    width: 90%;
    margin-left: 4%;
}

.callout h5{
    font-size: 25px;
}

.support a {
    width: 35%;
    font-size: 20px;
    background: rgb(223, 226, 17);
    border: 2px solid rgb(223, 226, 17);
}

/* footer */
.card-footer{
    width: 90%;
    height: 60px;
    margin-top: 100px;
}

.card-footer h6{
    margin-left: 12%;
    margin-top: 20px;
}



/*mobile view*/
@media all and (max-width: 500px){

     .callout{
        width: 100%;
        margin: 25% 0 0 0;
    }

    .callout h5{
        font-size: 20px;
    }

    .support a{
        width: 50%;
    }

    #about{
        height: 115vh;
    }

    .card-footer{
        width: 100%;
        margin-top: 20px;
    }

    /* footer */
  
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>futureFones || About</title>
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
                            <a href="home.php" class="nav-link" aria-current="page"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/house-fill.svg">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link active"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/people-fill.svg">ABOUT US</a>
                        </li>

                        <li class="nav-item">
                            <a href="signin.php" class="nav-link"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">SIGNIN</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-right.svg">MORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bookmark-dash-fill.svg">ORDERS</a></li>
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">ACCOUNT</a></li>
                                <li><a href="#" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-fill.svg">CARTS</a></li>
                                <li><a href="signup.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-bar-right.svg">SIGNUP</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a href="contact.php" class="dropdown-item">  <img id="dropImg" class="img-fluid" src="images/service.png">Contact Us</a></li>
                            </ul>
                        </li>
                        <!-- disabled -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">disabled</a>
                        </li> -->

                        <!-- first ul ends here -->
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                        <button id="menuBtn" class="btn btn-small" type="submit"><img id="dropImg" style="width: 20px;" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/search.svg"></button>
                    </form>

                </div>
                <!-- first div end here -->
            </div>
        </nav>

        <div id="about" class="container-fluid">

            <img src="images/homeBG.jpg" class="d-block img-fluid">

            <div class="callout justify-content-center">
                <h1 class="text-center text-white display-1">futureFones</h1>
                <h5 class="text-center text-white mt-5">
                  Slelecting the phone and accessories that are best best suited for you abd each member of your family is a big dicision. 
                  That's why "futureFones" offers large selectin of brands of phones and  accessories from prefered carriers. If you're shopping 
                  within a certain budget, be sure to check out our cell phone deals for special offers(20% OFF) that might allow you to upgrade to a smartphone with
                  more data capacity. We also offer payment on delivery.
                </h5>

                <!-- button to signUP page -->
                <div class="support text-center mt-5">
                    <a href="signup.php" class="btn btn-large text-center text-white">Explore Now</a>
                </div>

                <div class="card-footer text-muted">
                  <h6 class="text-center">futureFones FARM CENTER, KANO, NIGERIA, FAGGE </h6>
                </div>
            </div>

            
        </div>

 <script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>