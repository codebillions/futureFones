<?php
    session_start();

    require("database.php");
    require("signupFunction.php");
    require("signinFunction.php");
    require("adminLoginfunction.php");
    require("adminRegfunction.php");
    require("purchaseFormfunction.php");
    require("addnewitemfunction.php");
    require("banktransferUploadFunction.php");


    
    //customer

    if(isset($_GET['lgn']) && $_GET['lgn'] == 'login'){
        $customer = new Login();
        $email = $_POST['email'];
        $pwd = $_POST ['pwd'];
        $alert = "<script>alert('You are logedin successfully');</script>";
        $alert2 = "<script>alert('wrong email or password');</script>";

        if($customer->login($email, $pwd)){
            echo $alert;
            header("Location: phone.php");
        }else{
             echo ("wrong email or password");
             //header("Location: signin.php");
        }
    }

    if(isset($_GET['rg']) && $_GET['rg'] == 'Signup'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phoneNO = $_POST['phoneNO'];
        $state = $_POST['state'];
        $add = $_POST['add'];
        $zipcode = $_POST['zipcode'];
        $gender = $_POST['gender'];
        $pwd = $_POST['pwd'];
        $access = $_POST['access'];
        $agree = $_POST['agree'];

        $signup = new Signup();

        if($signup->reg($fname, $lname, $email, $phoneNO, $state, $add, $zipcode, $gender, $pwd, $access, $agree)){
            echo("<script> alert('Your account was created successfully') </script>");
            header("Location: signin.php");
        }else{
            echo("<script> alert('An unexpected error occured. please try again') </script>");
        }

    }



    //ADMIN
    
    if(isset($_GET['lgn']) && $_GET['lgn'] == 'adminLogin'){
        $login = new adminLogin();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alert = "<script>alert('You are logedin successfully');</script>";

        if($login->adminLogin($email, $password)){
            echo $alert;
            header("Location: adminaccount.php");
        }else{
             echo ("wrong email or password");
        }
    }


    if(isset($_GET['rg']) && $_GET['rg'] == 'adminSignup'){
        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $admin = new Admin();
        
        if ($admin->adminReg($fname, $uname, $email, $password)){
            echo("<script> alert('Your account was created successfully') </script>");
            header("Location: adminLogin.php");
        }else{
            echo("<script> alert('An unexpected error occured. please try again') </script>");
        }
    }



    //ORDERS
    if(isset($_GET['ord']) && $_GET['ord'] == 'order'){
        $customerID = $_POST['custID'];
        $itemName = $_POST['item'];
        $price = $_POST['price'];
        $fullName = $_POST['name'];
        $phoneNumber = $_POST['number'];
        $state = $_POST['state'];
        $LGA = $_POST['lga'];
        $address = $_POST['add'];
        $zipcode = $_POST['zipcode'];
        $date = $_POST['date'];
        $quantity = $_POST['quantity'];
        $payment_option = $_POST['payment'];
        $total = $_POST['total'];

        $ord= new Order(); 

        if($payment_option == "Bank Transfer"){
            if($ord->order($customerID, $itemName, $price, $fullName, $phoneNumber, $state, $LGA,  $address, $zipcode, $date, $quantity, $payment_option, $total)){
                echo("<script> alert('please complete the transaction') </script>");
                header("Location: banktransfer.php");
            }else{
            echo("<script> alert('An unexpected error occured. please try again') </script>");
            }
        }

        else if($payment_option == "Bank Card"){
            if($ord->order($customerID, $itemName, $price, $fullName, $phoneNumber, $state, $LGA,  $address, $zipcode, $date, $quantity, $payment_option, $total)){
                echo("<script> alert('please complete the transaction') </script>");
                header("Location: bankcardpayment.php");
            }else{
            echo("<script> alert('An unexpected error occured. please try again') </script>");
            }
        }

    }


    //addnewitem
    if(isset($_GET['add']) && $_GET['add'] == 'additem'){
        $phonename = $_POST['pname'];
        $phoneimage = $_POST['image'];
        $price = $_POST['price'];
        $details = $_POST['details'];

        $additem = new addnewProduct();

        if($additem->additem($phonename, $phoneimage, $price, $details)){
            header("Location: adminaccount.php");
        }else{
            echo("<script> alert('An unexpected error occured. please try again') </script>");
            }
    }

    //customer payment proof Upload
    if(isset($_GET['upld']) && $_GET['upld'] == 'upload'){
        $customerID = $_POST['customerID'];
        $upload = $_POST['file'];
        $flname = $_POST['flname'];
        $email = $_POST['email'];

        $proof = new uploadpayment();

        if($proof->upload( $customerID, $upload, $flname, $email)){
            header("Location: confirmation.php");
        }else{
            echo("<script> alert('connection error. please contact support with proof if your transfer was successful') </script>");
        }
    }
?>