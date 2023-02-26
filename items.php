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
    height: fit-content;
    background-size: cover;
    background-position: center;
    background: white; 
}



#container img{
    width: 150px;  margin:100px 0 0 50px;
}

#container h6{
    margin-left: 60px;
}

#container h5{
    margin-left: 60px;
}

#container p{
    margin-left: 60px;
}

#container button{
    width: 100px; 
    margin-left: 70px;
}

#container button a{
    text-decoration: none;
    color: white;
}


@media all and (max-width: 500px){

#column {
    height: 180vh;
}
}


</style>
        

        <div id="column" class="container-fluid ">
                
           <div class="col-md-12 d-block">

                

                    <div id="margin" class="col-md-12">
                        <div class="row">

                             <?php
                                        $sql = "SELECT * FROM `phone_cart`;";
                                        $result = mysqli_query($connection, $sql);


                                    while($row = mysqli_fetch_array($result)){?>
                                    <div id='container' class='row'>

                                            <form id='phones' class='col-md-4 p-3'>
                                                <img  type="text" src="images/<?=$row['images']?>">
                                                <h6 class="text-left text-balck"><?=$row['phoneName']?></h6>
                                                <p  class="text-left text-balck"><?=$row["destails"]?></p>
                                                <h5  class="text-left text-balck">N<?=number_format($row["price"],2)?></h5>
                                            <form> 

                                        </div>
                                <?php }
                            ?>

                        </div>
                </div>

                </div>

           </div>
               
   
        </div>


        


<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>