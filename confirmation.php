<?php
session_start();

require("navbar.php");
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

#main-container{
    height: 100vh;
    width: 100%;
    justify-content: center;
    display: block;
    background-size: cover;
    background-position: center;
    background-image: url("images/formBG.jpg")
}

#main-container #img-box{
    padding-top: 13%;
}

#main-container #img-box img{
    width: 200px;
    margin: 0 0 0 43%;
}

/*mobile view*/

@media all and (max-width: 500px){
 #main-container #img-box{
    padding-top: 40%;
}

#main-container #img-box img{
    width: 150px;
    margin: 0 0 0 33%;
}

    #main-container h1{
        font-size: 20px;
    }

    #main-container h3{
        font-size: 18px;
    }
}


</style>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

<div id="main-container" class="container-fluid display-block justify-center">

<div id="img-box" class="display-block justify-center">
   
    <img class="img-fluid" src="images/success.png">

</div>

    <h1 class="text-center text-white">your payment have been confirmed</h1>
    <h3 class="text-center text-white">A confirmation message have been sent  to your email</h3>

</div>