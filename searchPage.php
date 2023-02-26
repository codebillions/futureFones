<?php
session_start();
    require ('navbar.php');

    $connect =mysqli_connect("localhost", "root", "", "futurefones");
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

.header{
    margin-top: 100px;
    margin-left: 20px;
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


<div id="seacher" class="col-md-4 p-3">

 <?php
 
 if(isset($_POST['subsearch'])){

    $search = mysqli_real_escape_string($connect, $_POST['search']);

    $sql ="SELECT * FROM `phone_cart` WHERE phoneName LIKE '%$search%' OR destails LIKE '%$search%'";

    $result = mysqli_query($connect, $sql);
    $queryResult = mysqli_num_rows($result);

    echo "<h5 class='header'>There are ".$queryResult." results from your Search!</h5>";

    if($queryResult > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo"
             <a style='text-decoration: none; color: black' href='phonesearch.php?phoneName=".$row['phoneName']."&details=".$row['destails']."'>
                <img id='images' class='mt-5' src='images/".$row['images']."'>
                <h6 style='color: rgb(190, 187, 7)' class='text-left'>".$row['phoneName']."</h6>
                <p class='text-left'>".$row['destails']."</p>
                <h5 class='text-left'>N ".number_format($row['price'],2)."</h5>
            
                <input type='hidden' name='name' value='".$row['phoneName']."'>
                <input type='hidden' name='details' value='".$row['destails']."'>
                <input type='hidden' name='price' value='".$row['price']."'>

             </a>
            ";
        }
    }else{
        echo "<p style='margin-left: 20px;'>Sorry! there is no result for your search</p>";
    }
 }
 ?>
</div>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

</body>
</html>