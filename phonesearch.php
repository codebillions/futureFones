
<?php
    
    session_start();

    $connect =mysqli_connect("localhost", "root", "", "futurefones");
    
    //require("signinFunction.php");
    //require ("util.php");

    //$userName =$_SESSION['firstName'];

    if (isset($_POST['sub'])){
        if (isset($_SESSION['cart'])){

            $session_array_srNO= array_column($_SESSION['cart'], "srNO");

            if(!in_array($_GET['srNO'], $session_array_srNO)){

                $session_array = array(
                'srNO' => $_GET['srNO'],
                "phoneName" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );

            $_SESSION['cart'][] = $session_array;
            }

        }else{
            $session_array = array(
                'srNO' => $_GET['srNO'],
                "phoneName" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );

            $_SESSION['cart'][] = $session_array;
        }
    }

    //BUY
    if (isset($_POST['submit'])){
         header("Location: purchaseForm.php");
        if (isset($_SESSION['buy'])){

            $session_array_srNO= array_column($_SESSION['buy'], "srNO");

            if(!in_array($_GET['srNO'], $session_array_srNO)){

                $session_array = array(
                'srNO' => $_GET['srNO'],
                "phoneName" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );

            $_SESSION['buy'][] = $session_array;

           
            }

        }else{
            $session_array = array(
                'srNO' => $_GET['srNO'],
                "phoneName" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );

            $_SESSION['buy'][] = $session_array;
        }
    }


    require ("navbar.php");

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

/* phones */
form{
    margin-left: 20px;
}

#images{
    width: 150px; 
    margin-left: -10px;
}

#btn{
    width: 100%;
}

#buy{
    width: 100%;
    background: rgb(17, 184, 25);
}

#cartTable{
    margin-top: 65px;
}

#purchaseBtn{
    width: 30%;
    background: rgb(17, 184, 25);
}

#phone h1{
    margin-top: 70px;
}

#cart h1{
    margin-top: 70px;
}

/* logos section */
#logos{
   background: rgb(5, 31, 0);
   width:100%;
   height: 50vh;
}

#logos-img{
    width: 200px;
}

#logos-container{
    margin-top: 100px;
}


/*mobile view*/
@media all and (max-width: 500px){

form{
    margin-left: 0;
}

#phones{
    margin-top: 30px;
    border: 1px solid rgb(224, 224, 224); 
    background: rgb(255, 255, 242);
}

table{
    font-size: 12px;
} 

#cart h1:{
    margin-top: 0;
}

/* logos section */
    #logos{
        height: 75vh;
    }

    #logos-img{
     width: 400px;
   }

   #logos-container{
    width: 50%;
    margin-top: 20px;
  }

}
</style>

        
            <div class="container-fluid">

                <div class="col-md-12 d-block">

                    <div class="row">

                        <div id="phone" class="col-md-6">
                            <h1 class="text-center text-dark pt-5">PHONES</h1>

                            <div id="phone-margin" class="col-md-12">
                                <div class="row">


                            <?php

                                //search code
                                $phoneName = mysqli_real_escape_string($connect, $_GET['phoneName']);
                                $details = mysqli_real_escape_string($connect, $_GET['details']);


                                $query = "SELECT * FROM `phone_cart` WHERE phoneName='$phoneName' AND destails='$details'";

                                $result = mysqli_query($connect, $query);


                                while ($row = mysqli_fetch_array($result)){?>

                                <div id="phones" class="col-md-4 p-3">
                                    <form action="phone.php?srNO=<?=$row['srNO'] ?>" method="POST">
                                        <img id="images" class="mt-5" src="images/<?= $row['images'] ?>">
                                        <h6 style="color: rgb(190, 187, 7);" class="text-left"><?= $row['phoneName']; ?></h6>
                                        <p class="text-left"><?= $row['destails']; ?></p>
                                        <h5 class="text-left">N<?= number_format($row['price'],2);?></h5>
                                    
                                        <input type="hidden" name="name" value="<?= $row['phoneName'] ?>">
                                        <input type="hidden" name="details" value="<?= $row['destails'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">

                                        <input type="number" name="quantity" value="1" class="form-control">

                                        <input id="btn" type="submit" name="sub" class="btn btn-large btn-block btn-warning text-center mt-2" onclick="add()" value="Add To Cart">
                                        <input id="buy" type="submit" name="submit" class="btn btn-large btn-block text-center mt-3" value="BUY NOW">


                                    </form>
                                </div>

                                <?php }



                                ?>

                               </div>
                            </div>
                            
                        </div>

                        <div id="cart" class="col-md-6 table-responsive-md">
                            <h1 class="text-center text-dark pt-5">CART</h1>
                            <?php
                            $total = 0;
                            $output ="";

                            $output ="
                              <table id='cartTable' class='table table-bordered table-striped table-hover text-center'>
                                <tr>
                                  <th scope='col'>Item ID</th>
                                  <th scope='col'>Item Name</th>
                                  <th scope='col'>Item Price</th>
                                  <th scope='col'>Quantity</th>
                                  <th scope='col'>Total price</th>
                                  <th scope='col'>Action</th>
                                </tr>
                              ";
                             if (!empty($_SESSION['cart'])){
                                 foreach($_SESSION['cart'] as $key => $value){

                                     $output.="
                                        <tr>
                                            <td>".$value['srNO']."</td>
                                            <td>".$value['phoneName']."</td>
                                            <td>N".number_format($value['price'],2)."</td>
                                            <td>".$value['quantity']."</td>
                                            <td>N".number_format($value['price'] * $value['quantity'],2)."</td>
                                            <td>
                                              <a style='display: block;' href='phone.php?action=remove&srNO=".$value['srNO']."'>
                                                <button id='removeBtn' class='btn btn-block btn-danger' onclick='remove()'>Remove</button>
                                              </a>
                                            </td>
                                     ";

                                     $total = $total + $value['quantity'] * $value['price'];
                                 }

                                 $output .="
                                <tr>
                                  <td colspan='3'></td>
                                  <td>Total Price</td>
                                  <td>N".number_format($total,2)."</td>
                                  <td>
                                    <a href='phone.php?action=clearall'>
                                      <button class='btn btn-warning btn-block'>Clear</button>
                                    </a>
                                  </td>
                               
                              <tr>   
                                <td  colspan='6'>
                                  <a href='#'>
                                      <button id=purchaseBtn class='btn btn-block text-white mt-3'>Purchase</button>
                                  </a>
                                </td> 
                               <tr>  

                                </tr>
                                 </table>";
                             }

                             echo $output;
                            ?>
                               
                           
                        </div>

                    </div>

                </div>

            </div>

            <?php
                if(isset($_GET['action'])){
                    if($_GET['action'] == "clearall"){
                        unset($_SESSION['cart']);
                    }
                }

                if ($_GET['action'] == "remove"){
                    foreach($_SESSION['cart'] as $key => $value){
                        if($value['srNO'] == $_GET['srNO']) {
                            unset($_SESSION['cart'][$key]);
                        }
                    }
                }

                 if(isset($_GET['XX'])){
                     if($_GET['XX'] == "clear"){
                         unset($_SESSION['buy']);
                     }
                 }

            ?>

    <!-- logos section -->
                    <div id="logos" class="container-fluid">

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

        <script>
               let button = document.querySelctor("#btn");
               let removeBtn = document.querySelector("removeBtn");
               let clearAll = document.querySelector("clearAll");

               function add(){
                   alert("Added successfully");
               }

               function remove(){
                
                 alert("Item have been removed successfully");
                   
               }

               function clear(){
                   alert("cleared successfully");
               }
           </script>

    <script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

        </body>
        </html>

