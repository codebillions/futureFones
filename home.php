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

/* slide section */

#carouselExampleSlideOnly{
    width: 100%; 
    height: 100vh;
}

#slide{
    height: 100vh;
    position: relative;
    overflow: hidden;
}

#slide img{
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
    margin-top: 15%;
    width: 50%;
    margin-left: 25%;
}

.callout h5{
    font-size: 25px;
}

.support a {
    width: 50%;
    font-size: 20px;
    background: rgb(223, 226, 17);
    border: 2px solid rgb(223, 226, 17);
}

#slide2{
   height: 100vh;
   overflow: hidden;
}

#col1{
    margin-top: 70px;
    height: 100vh;
}

#col1 h2{
    display: none;
}


#col1 #col-image{
    width: 140%;
    height: 100vh;
    margin-left: -22%;
    margin-top: -35px;
}

#col2{
    margin-top: 70px;
     height: 100vh;
}

#col2 #col-image{
   width: 140%;
    height: 100vh;
    margin-left: -25%;
    margin-top: -35px;
}

/* item section */
#phones{
    width: 100%;
    height: 100vh;
}

#phone-col{
    margin-top: 100px;
    border: 1px solid rgb(224, 224, 224); 
    background: rgb(255, 255, 242);
}

#phone-col img{
    width: 200px;
}

#phone-col #p2{
    display: none;
}

#phone-col a{
    width: 50%;
}

#others{
    margin-top: 25px;
    border: 1px solid rgb(224, 224, 224); 
    background: rgb(255, 255, 242);
}

#others img{
    width: 200px;
}

#others #p2{
    display: none;
}

#others a{
    width: 50%;
}


/* logos section */
#logos{
   background: rgb(5, 31, 0);
   width:100%;
}

#logos-img{
    width: 200px;
}

#logos-container{
    margin-top:0;
}

/* footer */
.card-footer{
    height: 60px;
    width: 100%;
}

.card-footer img{
    width: 20px;
    margin-left: 30%;
}

.card-footer h5{
    margin-left: 15px;
}





/*mobile view*/
@media all and (max-width: 500px){
   
    .callout{
        width: 80%;
        margin: 45% 0 0 10%;
    }

    .callout h5{
        font-size: 20px;
    }

    #col1{
        margin-top: 70px;
        height: 100vh;
    }

    #col1 #col-image{
        width: 250%;
        height: 100vh;
        margin-left: -80%;
        margin-top: -20px;
    }
    #col1 h1{
        display: none;
    }
    #col1 h2{
        display: block;
    }

    #col2{
        display: none;
    }

     /* phones */
    #phones{
        height: 130vh;
    }

    #phone-col{
        margin-top: 30px;
    }
/* logos section */
    #logos{
        height: 75vh;
        margin-top: 50px;
    }

    #logos-img{
     width: 400px;
   }

   #logos-container{
    width: 50%;
    margin-top: 20px;
  }

  /* footer */
  .card-footer{
        height: 80px;
    }

    .card-footer img{
        width: 30px;
        height: 40px;
        margin-left: 5%;
    }

    .card-footer h5{
        font-size: 15px;
    }

}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>futureFones</title>
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
                            <a href="home.php" class="nav-link active" aria-current="page"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/house-fill.svg">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/people-fill.svg">ABOUT US</a>
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
                                <li><a href="#phone-col" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/phone-fill.svg">PHONES</a></li>
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bookmark-dash-fill.svg">ORDERS</a></li>
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">ACCOUNT</a></li>
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-fill.svg">CARTS</a></li>
                                <li><a href="signup.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-bar-right.svg">SIGNUP</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a href="contact.php" class="dropdown-item">  <img id="dropImg" class="img-fluid" src="images/service.png">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                        <button id="menuBtn" class="btn btn-small" type="submit"><img id="dropImg" style="width: 20px;" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/search.svg"></button>
                    </form>

                </div>
                <!-- first div end here -->
            </div>
        </nav>

<!-- slde show -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

   <!-- item 1 -->
    <div id="slide" class="carousel-item active">
            <img src="images/homeBG.jpg" class="d-block img-fluid">

            

            <div class="callout justify-content-center">
                <h1 class="text-center text-white display-1">futureFones</h1>

                <h5 class="text-center text-white mt-5">
                   We ensure fast transaction and delivery. Explore to know more.
                </h5>

                <!-- button to signUP page -->
                <div class="support text-center mt-5">
                    <a href="signin.php" class="btn btn-large text-center text-white">Explore Now</a>
                </div>
            </div>
    </div>

    <!-- item 2 -->
    <div id="slide2" class="carousel-item bg-black">
            <!-- <img src="images/iphone.png" class="d-block w-50 img-fluid"> -->
            <div class="row mt-5 mx-5">

                <div id="col1" class="col-md-6 ">
                    <h1 class="text-center text-white">IOS</h1>
                    <h2 class="text-center text-white">Purschase all apple phones</h2>
                    <img id="col-image" src="images/iphone.png" >
                </div>

                <div id="col2" class="col-md-6 ">
                    <h1 class="text-center text-white">Android</h1>
                    <img id="col-image" src="images/samsung.png">
                </div>

            </div>
        </div>

         <!-- item 3 -->
     <div id="slide" class="carousel-item">
            <img src="images/bg.jpg" class="d-block img-fluid">

            <div class="callout justify-content-center">
                <h1 class="text-center text-white display-1">futureFones </h1> <h2 style="color: yellow;" class="text-center">20% OFF</h2>
                <h5 class="text-center text-white mt-5">
                    Our phones are shipped directly from production companies and we offer 20% OFF. Make an order now.
                </h5>

                <!-- button to signUP page -->
                <div class="support text-center mt-5">
                    <a href="signin.php" class="btn btn-large text-center text-white">Order Now</a>
                </div>
            </div>
     </div>

  </div>

  <!-- button slide controller -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>


<!-- item section -->
<div id="phones" class="container-fliud bg-white">

    <div id="phone-row" class="row mx-3">

    <!-- first four col -->
        <div id="phone-col" class="col-md-3 p-1">
            <img style="width: 220px;" src="images/iphone 13.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 13</h5>
            <p class="mx-3 text-left" id="p1">RAM-4GB ROM-256GB IOS-15 processor-A15 bionic chip CAM-12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-4GB ROM-256GB IOS-15 A15 CAM-12mp + 12mp</p>
            <h5 class="mx-3 text-left">N460,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="phone-col" class="col-md-3 p-1">
           <img src="images/iphone 12 pro max.jfif" class="img-fluid">
           <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 12 pro max</h5>
            <p class="mx-3 text-left" id="p1">RAM-6GB ROM-512GB IOS-14 processor-A14 bionic chip CAM-12mp + 12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-6GB ROM-512GB IOS-14 A14 CAM-12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N690,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="phone-col" class="col-md-3 p-1">
           <img style="width: 120px;" src="images/iphone 13 pro max.jfif" class="img-fluid">
           <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 13 pro max</h5>
            <p class="mx-3 text-left" id="p1">RAM-6GB ROM-1TB IOS-15 processor-A15 bionic chip CAM-12mp + 12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-6GB ROM-1TB IOS-15 A-15 CAM-12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N880,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="phone-col" class="col-md-3 p-1">
            <img src="images/iphone 12 pro.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 12 pro</h5>
            <p class="mx-3 text-left" id="p1">RAM-6GB ROM-256GB IOS-14 processor-A14 bionic chip CAM-12mp + 12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-6GB ROM-256GB IOS-14 A14 CAM-12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N590,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <!-- others -->
        <div id="others" class="col-md-3 p-1">
            <img style="width: 135px;" src="images/iphone 14 pro.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 14 pro</h5>
            <p class="mx-3 text-left" id="p1">RAM-8GB ROM-1TB IOS-16 processor-A16 bionic chip CAM-48mp + 12mp + 12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-8GB ROM-1TB IOS-16 A16 CAM-48mp +12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N1,300,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img src="images/iphone 12.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 12</h5>
            <p class="mx-3 text-left" id="p1">RAM-4GB ROM-128GB IOS-14 processor-A14 bionic chip CAM-12mp + 12mp</p>
            <p class="mx-3 text-left" id="p2">RAM-4GB ROM-128GB IOS-14 A14 CAM-12mp +12mp</p>
            <h5 class="mx-3 text-left">N450,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

         <div id="others" class="col-md-3 p-1">
            <img src="images/iphone 11 pro max.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 11 pro max</h5>
            <p id="p1" class="mx-3 text-left">RAM-4GB ROM-512GB IOS-14 processor-A13 bionic chip CAM-12mp + 12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-4GB ROM-512GB IOS-14 A13 CAM-12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N415,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img style="width: 280px;" src="images/iphone 11 pro.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 11 pro</h5>
            <p id="p1" class="mx-3 text-left">RAM-4GB ROM-256GB IOS-14 processor-A13 bionic chip CAM-12mp + 12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-4GB ROM-256GB IOS-14 A13 CAM-12mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N378,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img src="images/iphone 11.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone 11</h5>
            <p id="p1" class="mx-3 text-left">RAM-4GB ROM-128GB IOS-14 processor-A13 bionic chip CAM-12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-4GB ROM-128GB IOS-14 A13 CAM-12mp +12mp</p>
            <h5 class="mx-3 text-left">N255,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img src="images/iphone XS max.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">iPhone XS max</h5>
            <p id="p1" class="mx-3 text-left">RAM-4GB ROM-256GB IOS-14 processor-A12 bionic chip CAM-12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-4GB ROM-256GB IOS-14 A12 CAM-12mp +12mp</p>
            <h5 class="mx-3 text-left">N290,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img src="images/samsung S22 ultra.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Samsung Galaxy S22 Ultra</h5>
            <p id="p1" class="mx-3 text-left">RAM-12GB ROM-512GB Bttery-4000MAH CAM-50mp + 12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-12GB ROM-512GB Bttery-4000MAH CAM-50mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N895,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

         <div id="others" class="col-md-3 p-1">
            <img src="images/samsung S22.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Samsung Galaxy S22</h5>
            <p id="p1" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-4000MAH CAM-50mp + 12mp + 12mp</p>
            <p id="p2" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-4000MAH CAM-50mp +12mp +12mp</p>
            <h5 class="mx-3 text-left">N465,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img style="width: 215px;" src="images/infinix note 12 6GB.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Infinix note 12</h5>
            <p id="p1" class="mx-3 text-left">RAM-6GB ROM-128GB Bttery-5000MAH CAM-50mp + 2mp + QVGA</p>
            <p id="p2" class="mx-3 text-left">RAM-6GB ROM-128GB Bttery-5000MAH CAM-50mp +2mp +QVGA</p>
            <h5 class="mx-3 text-left">N108,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

         <div id="others" class="col-md-3 p-1">
            <img style="width: 243px;" src="images/infinix note 12 G96.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Infinix note 12 G96</h5>
            <p id="p1" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-5000MAH CAM-50mp + 12mp + QVGA</p>
            <p id="p2" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-5000MAH CAM-50mp +12mp +QVGA</p>
            <h5 class="mx-3 text-left">N132,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <div id="others" class="col-md-3 p-1">
            <img src="images/tecno pova5G.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Tecno pova 5G</h5>
            <p id="p1" class="mx-3 text-left">RAM-8GB ROM-128GB Bttery-6000MAH CAM-50mp + 2mp + QVGA</p>
            <p id="p2" class="mx-3 text-left">RAM-8GB ROM-128GB Bttery-6000MAH CAM-50mp +2mp +QVGA</p>
            <h5 class="mx-3 text-left">N132,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

         <div id="others" class="col-md-3 p-1">
            <img src="images/tecno phantom X.jfif" class="img-fluid">
            <h5 class="mx-3 text-left" style="color: rgb(190, 187, 7);">Tecno Phantom X</h5>
            <p id="p1" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-4700MAH CAM-50mp + 13mp + 8mp + LAF</p>
            <p id="p2" class="mx-3 text-left">RAM-8GB ROM-256GB Bttery-4700MAH CAM-50mp +13mp +LAF</p>
            <h5 class="mx-3 text-left">N228,000</h5>
            <a id="btnAddToCart" href="#" class="btn btn-large btn-warning text-center text-dark mx-3" onclick="add()">Add To Cart</a>
        </div>

        <a style="text-decoration: none; color: blue;" href="signin.php" class="text-end mt-3">SEE MORE</a>


        

<!-- logos section -->
<div id="logos" class="container-fluid p-5">

    <div id="logos-row" class="row mx-5">

    <div id="logos-container" class="col-2 bg-white">
        <a href="#">
            <img id="logos-img" src="images/tecno logo.jpg" class="img-fluid">
        </a>
    </div>

    <div id="logos-container" class="col-2 bg-white pt-5">
        <a href="#">
            <img id="logos-img" src="images/infinix logo.png" class="img-fluid">
        </a>
    </div>

    <div id="logos-container" class="col-2 bg-white pt-4">
        <a href="#">
            <img id="logos-img" src="images/apple logo.jpg" class="img-fluid">
        </a>
    </div>

    <div id="logos-container" class="col-2 bg-white pt-5">
        <a href="#">
            <img id="logos-img" src="images/samsung logo.jpg" class="img-fluid">
        </a>
    </div>

     <div id="logos-container" class="col-2 bg-white pt-5">
        <a href="#">
            <img id="logos-img" src="images/redmi.jpg" class="img-fluid">
        </a>
    </div>

    <div id="logos-container" class="col-2 bg-white">
        <a href="#">
            <img id="logos-img" src="images/nokia logo.png" class="img-fluid">
        </a>
    </div>


    </div>
</div>

<footer style="background: rgb(223, 226, 17)" class="card-footer text-muted d-flex pt-3">
    <img src="images/location.png" class="img=fluid">
    <h5 class="text-center text-white">futureFones FARM CENTER, KANO, NIGERIA, FAGGE </h5>
</footer>

<script>
    let addtoCArt = document.querySelctor("#btnAddToCart")

    function add(){
        alert("Please login to add item to cart");
    }
</script>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>