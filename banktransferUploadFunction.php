<?php

    class uploadpayment{
        public function upload( $customerID, $upload, $flname, $email){
          
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if ($connection->lconnect_error){
                echo("<script> alert('Error! could not connect)</script>". $connection->connect_error);
            }else{
                $customerID = $connection->real_escape_string($customerID);
                $upload = $connection->real_escape_string($upload);
                $flname = $connection->real_escape_string($flname);

                $sql ="INSERT INTO `bank_tranfer`(`customerID`, `proof_of_payment`, `FullName`, `Email`)
                       VALUES ('".$customerID."', '".$upload."', '".$flname."', '".$email."')";

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