<?php
//USERS
    if(isset($_GET['lgt']) && $_GET['lgt']=='out'){
        session_unset();
        session_destroy();
        header("Location: signin.php");
     }

//Admin
if(isset($_GET['logout']) && $_GET['logout']=='getOut'){
    session_unset();
    session_destroy();
    header("Location: adminLogin.php");
}
    
?>