<?php

    class addnewProduct{
        public function additem($phonename, $phoneimage, $price, $details){

        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connection->connect_error){
            echo("<script> alert('Error! could not connect)</script>". $connection->connect_error);
        }else{
            $phonename = $connection->real_escape_string($phonename);
            $phoneimage = $connection->real_escape_string($phoneimage);
            $price = $connection->real_escape_string($price);
            $details = $connection->real_escape_string($details);

        $sql = "INSERT INTO `phone_cart`(`phoneName`, `images`, `price`, `destails`) 
                VALUES ('".$phonename."', '".$phoneimage."', '".$price."', '".$details."')";

        if($connection->query($sql)){
            return true;
        }else{
            return false;
        }

        }
            $connection->close();
        }
    }
?>