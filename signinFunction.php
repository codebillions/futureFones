<?php

    class Login{
        public $sql;
        public $email;
        public $pwd; 

        private $connection;

        public function login($email, $pwd){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
            
            if ($connection->connect_error){
                echo("Error! couldn't connect".$connection->connect_error);
            }else{

                $email = $this->cleanData($email);
                $pwd = $this->cleanData($pwd);

                $sql ="SELECT `customerID`, `firstName`, `lastName`, `Email`, `phoneNmber`, `state`, `address`, `zipcode`, `gender`, `pass_word`, `acess_to_email`, `terms_condition` 
                       FROM `customer` 
                       WHERE `Email` = '".$email."' and `pass_word` = '".$pwd."'; ";

                $result = $connection->query($sql);
                $rowCount = $result->num_rows;

                if($rowCount == 1){

                    $row = $result->fetch_assoc();

                    $_SESSION['CUSTOMERID'] = $row['customerID'];
                    $_SESSION['FNAME'] = $row['firstName'];
                    $_SESSION['LNAME'] = $row['lastName'];
                    $_SESSION['EMAIL'] = $row['Email'];
                    $_SESSION['PHONENO'] = $row['phoneNmber'];  
                    $_SESSION['STATE'] = $row['state'];
                    $_SESSION['ADDRESS'] = $row['address'];
                    $_SESSION['ZIPCODE'] = $row['zipcode'];
                    $_SESSION['GENDER'] = $row['gender'];
                    $_SESSION['PASSWORD'] = $row['pass_word'];
                    $_SESSION['Access'] = $row['access_to_email'];
                    $_SESSION['AGREE'] = $row['terms_condition'];

                    return true;
                    $connection->close();
                }
            }
        }

        private function cleanData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    }
?>