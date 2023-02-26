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
            <table class="table text-center text-dark table-bordered table-sm table-striped table-hover">
                <thead>
                    <tr>
                        <th class="bg-dark text-white" scope="col">CUSTOMER ID</th>
                        <th class="bg-dark text-white" scope="col">FIRST NAME</th>
                        <th class="bg-dark text-white" scope="col">LAST NAME</th>
                        <th class="bg-dark text-white" scope="col">EMAIL</th>
                        <th class="bg-dark text-white" scope="col">PHONE NUMBER</th>
                        <th class="bg-dark text-white" scope="col">STATE</th>
                        <th class="bg-dark text-white" scope="col">ADDRESS</th>
                        <th class="bg-dark text-white" scope="col">ZIPCODE</th>
                        <th class="bg-dark text-white" scope="col">GENDER</th>
                        <th class="bg-dark text-white" scope="col">PASSWORD</th>
                        <th class="bg-dark text-white" scope="col">ACCESS</th>
                        <th class="bg-dark text-white" scope="col">TERMS</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                    if($connection_connect_error){
                        echo "error.$connection _connect_error";
                    }else{
                        echo
                            $sql = "SELECT * FROM `customer`;";
                            $result = $connection->query($sql);


                        while($row = $result->fetch_assoc()){
                            echo"
                                <tr scope='row'>
                                    <td>".$row['customerID']."</td>
                                    <td>".$row['firstName']."</td>
                                    <td>".$row['lastName']."</td>
                                    <td>".$row['Email']."</td>
                                    <td>".$row['phoneNmber']."</td>
                                    <td>".$row['state']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['zipcode']."</td>
                                    <td>".$row['gender']."</td>
                                    <td>* * * * * * * *</td>
                                    <td>".$row['acess_to_email']."</td>
                                    <td>".$row['terms_condition']."</td>
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