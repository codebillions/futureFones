<?php
    session_start();

    //require('adminLoginfunction.php');

    require('adminNavbar.php');
    require('database.php');

    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
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

#header{
    margin-left: -50%;
}

#column{
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-image: url("images/bg.jpg"); 
}

#cols{
    margin-top: 150px;
    height: 30vh;
    border: none;
    border-radius: 5px;
    background: rgb(192, 247, 130);
}

#cols2{
    margin-top: 150px;
    height: 30vh;
    border: none;
    border-radius: 5px;
    background: rgb(239, 140, 248);
}

#cols3{
    margin-top: 50px;
    height: 30vh;
    border: none;
    border-radius: 5px;
}

#cols-text{
    padding: 15px 0 0 15px;
}

#cols-image{
    margin: -25% 0 0 70%;
    width: 120px;
}

@media all and (max-width: 500px){
    #cols2{
        margin-top: 50px;
    }

    #column{
    height: 180vh;
}

#cols-text{
    padding: 15px 0 0 0;
}

#cols-image{
    margin: -20% 0 0 65%;
    width: 90px;
}

}


</style>
        

        <div id="column" class="container-fluid bg-dark">
            <div class="row mx-5">

            <div id="cols" class="col-md-5 text-white mx-4">

                <h3 id="cols-text" class="text-left display-6">CUSTOMERS</h3>
                <?php

                    if($connection->connect_error){
                        echo "Error! can't connect".$connection->connect_error;
                    }else{
                        $sql="SELECT COUNT(`firstName`) FROM `customer`";

                        $result = $connection->query($sql);

                        if($result){
                            $row = $result->fetch_assoc();

                            $number = $row['COUNT(`firstName`)'];
                        }

                        echo("<h1 vid='cols-text2' class='text-left display-1 text-black'>".$number."</h1>");
                    }
                ?>
                <img id="cols-image" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/people-fill.svg">

            </div>


            <!-- 2 -->
            <div id="cols2" class="col-md-5 text-white mx-4">
                
                <h3 id="cols-text" class="text-left display-6">ORDERS</h3>

                <?php

                    if($connection->connect_error){
                        echo "Error! can't connect".$connection->connect_error;
                    }else{
                        $sql="SELECT COUNT(`itemName`) FROM `orders`";

                        $result = $connection->query($sql);

                        if($result){
                            $row = $result->fetch_assoc();

                            $number = $row['COUNT(`itemName`)'];
                        }

                        echo("<h1 vid='cols-text2' class='text-left display-1 text-black'>".$number."</h1>");
                    }
                ?>

                <img id="cols-image" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-fill.svg">

            </div>


            <!-- 3 -->
            <div id="cols3" style="background: rgb(140, 183, 248);" class="col-md-5 text-white mx-4">

                <h3 id="cols-text" class="text-left display-6">NEW ORDERS</h3>
                <h1 vid="cols-text2" class="text-left display-1 text-black">1</h1>
                <img id="cols-image" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-plus-fill.svg">

            </div>


            <!--4 -->
            <div id="cols3" style="background: rgb(248, 156, 140);" class="col-md-5 text-white mx-4">

                <h3 id="cols-text" class="text-left display-6">PHONES AVAILABLE</h3>
                
                <?php

                    if($connection->connect_error){
                        echo "Error! can't connect".$connection->connect_error;
                    }else{
                        $sql="SELECT COUNT(`phoneName`) FROM `phone_cart`";

                        $result = $connection->query($sql);

                        if($result){
                            $row = $result->fetch_assoc();

                            $number = $row['COUNT(`phoneName`)'];
                        }

                        echo("<h1 vid='cols-text2' class='text-left display-1 text-black'>".$number."</h1>");
                    }
                ?>


                <img id="cols-image" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/phone-fill.svg">

            </div>


            
            </div>
        </div>
<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>