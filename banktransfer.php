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

    #main-container h1{
        padding-top: 110px;
    }

    #main-container h3{
        padding-top: 50px;
    }

    #main-container h4{
        padding-top: 30px;
    }

    #main-container a{
        width: 30%;
        margin-left: 35%;
        margin-top: 30px;
        
    }

    
/*mobile view*/
@media all and (max-width: 500px){
    #main-container h1{
       font-size: 20px;
    }

    #main-container h3{
       font-size: 16px;
       padding-top: 30px;
    }

     #main-container h4{
        padding-top: 30px;
        font-size: 14px;
    }

     #main-container a{
        width: 50%;
        margin-left: 25%;
        margin-top: 30px;
        
    }

}
</style>

    
<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

    <div  id="main-container" class="container-fluid bg-black">

            <h1 class="text-center text-white">MAKE PAYMENT TO THE ACCOUNT BELOW</h1>

            <h3 class="text-center text-white">Access Bank PLC</h3>

            <h3 class="text-center text-white">1525893920</h3>

            <h3 class="text-center text-white">JAMES OSEKA NIYI</h3>

            <h4 id="demo" class="clock text-primary text-center"></h4>

            <p class="text-center text-white">please note that any loss of funds after the duration of payment is passed, is on your own risk. Do well to contact support immediately</p>

            <a href="banktransferUpload.php" class="btn btn-kg btn-warning text-center text-white" type="submit">I HAVE PAID</a>

    </div>
    
    <script>

        var sec = 1800,
        
            demo = document.getElementById("demo"),
            secpass, 
            countdown = setInterval(function() {
                'use strict';

                secpass();
            }, 1000);

        function secpass(){

             'use strict';

        var min = Math.floor(sec / 60),
            remSec = sec % 60;

        if (remSec < 10) {
            remSec = '0' + remSec;
        }

        if (min < 10) {

            min = '0' + min;
        }

        demo.innerHTML = min + ":" + remSec

        if (sec > 0){
            sec = sec - 1;
        }else{
            clearInterval(countDown);

            demo.innerHTML = 'time expired';
        }

    }

    </script>
</body>
</html>
