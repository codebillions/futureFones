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
table button{
    width: 100px;
}
table button a{
    text-decoration: none;
    color: white;
}

table button a:hover{
    color: white;
}


@media all and (max-width: 500px){

#column {
    height: 180vh;
}
}


</style>
        

        <div id="column" class="container-fluid bg-white table-responsive-md">
            <table class="table text-center text-dark table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="bg-dark text-white" scope="col">PHONE ID</th>
                        <th class="bg-dark text-white" scope="col">PHONE NAME</th>
                        <th class="bg-dark text-white" scope="col">PHONE IMAGE NAME</th>
                        <th class="bg-dark text-white" scope="col">PRICE</th>
                        <th class="bg-dark text-white" scope="col">PHONE DETAILS</th>
                         <th class="bg-dark text-white" scope="col"></th>
                    </tr>
                </thead>

                <tbody>

                <?php
                    if($connection_connect_error){
                        echo "error.$connection _connect_error";
                    }else{
                        echo
                            $sql = "SELECT * FROM `phone_cart`;";
                            $result = $connection->query($sql);


                        while($row = $result->fetch_assoc()){
                            echo"
                                <tr scope='row'>
                                    <td>".$row['srNO']."</td>
                                    <td>".$row['phoneName']."</td>
                                    <td>".$row['images']."</td>
                                    <td>".$row['price']."</td>
                                    <td>".$row['destails']."</td>
                                    <td>
                                    <button id='btn' onclick='remove()'  type='button' class='btn btn-danger btn-large'><a href='deleteItem.php?srNO=".$row['srNO']."'>REMOVE</a></button>
                                    </td>
                                </tr>                                    
                            ";
                        }
                    }
                ?>
                </tbody>
            </table>      
        
        </div>

        <?php
        if(isset($_GET['srNO'])){
           
            $row['srNO'] = $_GET['srNO'];

            $sql = "DELETE FROM `phone_cart` WHERE srNO = '".$row['srNO']."';";

            $result = $connection->query($sql);
            
        }
        ?>

        <script>
            let button = document.querySelector("btn");

            function remove(){
                alert("The Item was removed successfully please refresh your the web page");
            }
        </script>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>