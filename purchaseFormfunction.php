<?php

 class Order{

    public function order($customerID, $itemName, $price, $fullName, $phoneNumber, $state, $LGA,  $address, $zipcode, $date, $quantity, $payment_option, $total){
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if ($connection->connect_error){
        echo("<script> alert('Error! could not connect)</script>". $connection->connect_error);
    }else{
        $customerID = $connection->real_escape_string($customerID);
        $itemName = $connection->real_escape_string($itemName);
        $price = $connection->real_escape_string($price);
        $fullName = $connection->real_escape_string($fullName);
        $phoneNumber = $connection->real_escape_string($phoneNumber);
        $state = $connection->real_escape_string($state);
        $LGA = $connection->real_escape_string($LGA);
        $address = $connection->real_escape_string($address);
        $zipcode = $connection->real_escape_string($zipcode);
        $date = $connection->real_escape_string($date);
        $quantity = $connection->real_escape_string($quantity);
        $payment_option = $connection->real_escape_string($payment_option);
        $total = $connection->real_escape_string($total);

        $sql ="INSERT INTO `orders`(`customerID`, `itemName`, `price`, `fullName`, `phoneNumber`, `state`, `local_Govt`, `address`, `zipcode`, `date`, `quantity`, `payment_option`, `total`) 
               VALUES ('".$customerID."', '".$itemName."', '".$price."', '".$fullName."', '".$phoneNumber."', '".$state."', '".$LGA."', '".$address."', '".$zipcode."', '".$date."', '".$quantity."', '".$payment_option."', '".$total."')";

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