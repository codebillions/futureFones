<?php

    class Admin{

        public function adminReg($fname, $uname, $email, $password){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if ($connection->connect_error){
                echo("<script> alert('Error! could not connect)</script>". $connection->connect_error);
            }else{
                $fname = $connection->real_escape_string($fname);
                $uname = $connection->real_escape_string($uname);
                $email = $connection->real_escape_string($email);
                $password = $connection->real_escape_string($password);

                $sql = "INSERT INTO `admin`(`fullName`, `userName`, `email`, `pass_word`) 
                        VALUES ('$fname','$uname','$email','$password')";  

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