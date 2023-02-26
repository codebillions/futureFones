<?php
session_start();

require("navbar.php");
require("signupFunction.php");
require("orderFunction.php");

$orders = new order();
$orders->custID = $_SESSION['CUSTOMERID'];

$customer = new Signup();

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
table{
    margin-top: 100px;
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

#cont1{
    width: 100%;
    height: fit-content;
    background: red;
}

h2{
    margin-top: 110px;
}

</style>



<div id="cont1" class="container-fluid bg-white table-responsive">

    <?php echo $orders->orderdeatails(); ?>

</div>

    <script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>


        
    </body>
</html>