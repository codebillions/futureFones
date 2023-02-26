<?php

class adminLogin {

    public $sql;
    public $email;
    public $password;

    private $connection;

    public function adminLogin($email, $password){
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if ($connection->connect_error){
            echo("Error! couldn't connect".$connection->connect_error);
        }else{
            $email = $this->cleanData($email);
            $password = $this->cleanData($password);

            $sql = "SELECT `srNO`, `fullName`, `userName`, `email`, `pass_word` 
                    FROM `admin` 
                    WHERE `email` ='".$email."' and `pass_word` = '".$password."'; ";

            $result = $connection->query($sql);
            $rowCount = $result->num_rows;

            if($rowCount == 1){
                $_SESSION['FULLNAME'] = $row['fullName'];
                $_SESSION['USERNAME'] = $row['userName'];
                $_SESSION['EMAIL'] = $row['email'];
                $_SESSION['PASSWORD'] = $row['pass_word'];

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