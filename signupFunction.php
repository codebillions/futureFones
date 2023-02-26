<?php

    class Signup{

        public function customerID(){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if ($connection->conect_error){
                 echo "Error! could not connect to sever!". $connection->connect_error;
            }else{
                $sql ="SELECT * FROM `customer`";

                $result = $connectin->query($sql);
                $num_of_rec = $result->num_rows;

                if($num_of_rec >= 1){
                    $grant = '';

                    while($row = $result->fetch_assoc()){  }

                    return $grant;
                }
            }
        }

        public function reg($fname, $lname, $email, $phoneNO, $state, $add, $zipcode, $gender, $pwd, $access, $agree){
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);


        if ($connection->connect_error){
            echo("<script> alert('Error! could not connect)</script>". $connection->connect_error);
        }else{

            $fname = $connection->real_escape_string($fname);
            $lname = $connection->real_escape_string($lname);
            $email = $connection->real_escape_string($email);
            $phoneNO = $connection->real_escape_string($phoneNO);
            $state = $connection->real_escape_string($state);
            $add = $connection->real_escape_string($add);
            $zipcode = $connection->real_escape_string($zipcode);
            $gender = $connection->real_escape_string($gender);
            $pwd = $connection->real_escape_string($pwd);
            $access = $connection->real_escape_string($access);
            $agree = $connection->real_escape_string($agree);


            //ID generator//
            $ID ="SELECT * FROM `customer_id_generator`";

            $result = $connection->query($ID);
            $row = $result->fetch_assoc();

            $attach ="";
            $start = $row["START"];
            $current = $row["CURRENT"];
            $string ="fF9";
            $str = "CUST";

            if($start >= $current){
                $current++;
                if($current < 10000){
                    $attach ='0'.$current;
                }
            }else{
                $current++;
                if($current < 10000){
                    $attach ='0'.$current;
                }else{
                    $attach = $current;
                }
            }

            $sql ="UPDATE `customer_id_generator` SET `CURRENT`='".$current."' ";
            $connection->query($sql);

            $sql = "INSERT INTO `customer`(`customerID`, `firstName`, `lastName`, `Email`, `phoneNmber`, `state`, `address`, `zipcode`, `gender`, `pass_word`, `acess_to_email`, `terms_condition`)
                   VALUES ('".$string.$attach.$str."', '".$fname."', '".$lname."', '".$email."', '".$phoneNO."', '".$state."', '".$add."', '".$zipcode."', '".$gender."', '".$pwd."', '".$access."', '".$agree."')";

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