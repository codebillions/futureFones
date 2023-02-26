<?php

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

/* form */
#form-section{
    width: 100%;
    height: 100vh;
    /* background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.3)), url("images/formBG.jpg"); */
    background-size: cover;
    background-position: center;
    background-image: url("images/formBG.jpg"); 
}

#form-section form{
    height: 80vh;
    margin: 0;
}

 #column1{
    margin-top: 17%;
    margin-left: 16%;
}

#column2{
    margin-top: 17%;
    margin-left: 20px;
}

label{
    color: white;
}

#button{
    background: rgb(223, 226, 17);
    width: 25%;
    margin-left: 16.2%;
}

#form-section form p{
    margin-left: 16%;
}

#form-section form a{
    text-decoration: none;
    margin-left: 10px;
}

/* footer */
.card-footer{
    margin-top: 50px;
}
.card-footer img{
   width: 30px; 
   margin-left: 32%;
}

.card-footer h5{
    margin-left: 20px;
    margin-top: 10px;
}


/*mobile view*/
@media all and (max-width: 500px){
#form-section{
    height: 100vh;
}

#form-section form{
    margin: 10px;
}

#column1{
    margin-top: 40%;
     margin-left: 0;
}

#column2{
    margin-top: 5%;
    margin-left: 0;
}

#form-section form p{
    margin-left: 0;
}

#button{
    width: 50%;
    margin-left: 0;
}

.card-footer{
    margin-top: 10%;
}

.card-footer img{
  display: none;
}

.card-footer h5{
    font-size: 18px;
}
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>futureFones || SignIn</title>
    <link rel="icon" href="images/flogo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
</head>
<body>

<!-- navbar -->
        <nav id="nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">

                <a href="#" class="navbar-brand">
                    <img class="img-fluid" src="images/logo.png" style="width: 85px;">
                    futureFones
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle-navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div style="border: none;" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link" aria-current="page"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/house-fill.svg">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/people-fill.svg">ABOUT US</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active"><img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">SIGNIN</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="menuImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/arrow-right.svg"> MORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/bookmark-dash-fill.svg">ORDERS</a></li>
                                <li><a href="signin.php" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/person-fill.svg">ACCOUNT</a></li>
                                <li><a href="#" class="dropdown-item"> <img id="dropImg" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/cart-fill.svg">CARTS</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a href="contact.php" class="dropdown-item">  <img id="dropImg" class="img-fluid" src="images/service.png">Contact Us</a></li>
                            </ul>
                        </li>

                        <!-- first ul ends here -->
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                        <button id="menuBtn" class="btn btn-small" type="submit"><img id="dropImg" style="width: 20px;" class="img-fluid" src="BOOTSTRAP/bootstrap-icons-1.9.1/search.svg"></button>
                    </form>

                </div>
                <!-- first div end here -->
            </div>
        </nav>


        <!-- form section -->
        <div id="form-section" class="container-fluid">

            <form action="function.php?lgn=login" method="POST" class=" row g-3 form needs-validation" novalidate enctype="multipart/formm-data">

                <div id="column1" class="col-md-4">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="validationCustom01" required >
                    <div class="valid-feedback">
                        verfied.
                    </div>

                    <div class="invalid-feedback">
                        please provide a valid email address.
                    </div>
                </div>

                <div id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label">password</label>
                    <input name="pwd" type="password" class="form-control" id="validationCustom02"  required>

                    <div class="invalid-feedback">
                        please provide a valid password.
                    </div>
                </div>

                
                <div class="col-12">
                    <button id="button" name="submit" class="btn btn-lg text-white p-2" type="submit">LOGIN</button>
                </div>

                <div class="col-12 d-flex">
                    <p class="text-left text-white">Don't have an account?</p>
                    <a href="signup.php" class="text center">Signup</a>
                </div>

            </form>

            <div class="card-footer text-muted text center d-flex">
                <img src="images/location.png" class="img-fluid">
                <h5>futureFones FARM CENTER, KANO, NIGERIA, FAGGE </h5>
            </div>

        </div>

        


    <script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

    <!-- form script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>