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
}

table{
    margin-top: 50px;
    cursor: pointer;
}


@media all and (max-width: 500px){

#column {
    height: 180vh;
}
}


</style>
        

        <div id="column" class="container-fluid bg-white table-responsive-md">
            <table class="table  text-center text-dark table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="bg-dark text-white" scope="col">CUSTOMER ID</th>
                        <th class="bg-dark text-white" scope="col">ITEM NAME</th>
                        <th class="bg-dark text-white" scope="col">PRICE</th>
                        <th class="bg-dark text-white" scope="col">FULLNAME</th>
                        <th class="bg-dark text-white" scope="col">PHONE NUMBER</th>
                        <th class="bg-dark text-white" scope="col">STATE</th>
                        <th class="bg-dark text-white" scope="col">LOCAL GOVERNMENT</th>
                        <th class="bg-dark text-white" scope="col">ADDRESS</th>
                        <th class="bg-dark text-white" scope="col">ZIPCODE</th>
                        <th class="bg-dark text-white" scope="col">QUANTITY</th>
                        <th class="bg-dark text-white" scope="col">PAYMENT OPTION</th>
                        <th class="bg-dark text-white" scope="col">TOTAL</th>
                        <th class="bg-dark text-white" scope="col">ITEM ID</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                    if($connection_connect_error){
                        echo "error.$connection _connect_error";
                    }else{
                        echo
                            $sql = "SELECT * FROM `orders`;";
                            $result = $connection->query($sql);


                        while($row = $result->fetch_assoc()){
                            echo"
                                <tr scope='row'>
                                    <td>".$row['customerID']."</td>
                                    <td>".$row['itemName']."</td>
                                    <td>".$row['price']."</td>
                                    <td>".$row['fullName']."</td>
                                    <td>".$row['phoneNumber']."</td>
                                    <td>".$row['state']."</td>
                                    <td>".$row['local_Govt']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['zipcode']."</td>
                                    <td>".$row['quantity']."</td>
                                    <td>".$row['payment_option']."</td>
                                    <td>".$row['total']."</td>
                                    <td>".$row['srNo']."</td>
                                </tr>                                    
                            ";
                        }
                    }
                ?>
                </tbody>
            </table>      
        
        </div>
<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>