<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "futurefones");

require("navbar.php");

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
    display: none;
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
    margin: 0 30px 30px 30px;
}

 #column1{
    margin-top: 10%;
}

#column2{
    margin-top: 10%;
}

#column3{
    margin-top: 10%;
} 

label{
    color: white;
}

#button{
    background: rgb(223, 226, 17);
    width: 25%;
}

#bt{
    width: 15%;
}

/*mobile view*/
@media all and (max-width: 500px){
#form-section{
    height: 230vh;
}

#form-section form{
    margin:0 10px 10px 10px;
}

#column1{
    margin-top: 15%;
}

#column2{
    margin-top: 5%;
}

#column3{
    margin-top: 5%;
}

a #button{
    width: 50%;
}

#bt{
    width: 50%;
}
}
</style>

<!-- form section -->
        <div id="form-section" class="container-fluid">
<?php

$form="";
if(!empty($_SESSION['buy'])){
    foreach($_SESSION['buy'] as $key => $value){

$form="
            <form action='function.php?ord=order' method='POST' class=' row g-3 form needs-validation' novalidate enctype='multipart/formm-data'>
        
                <div id='column1' class='col-md-4'>
                    <label for='validationCustom01' class='form-label'>ID</label>
                    <input name='custID' type='text' class='form-control' id='validationCustom01' required value='".$_SESSION['CUSTOMERID']."' >
                </div>

                <div id='column2' class='col-md-4'>
                    <label for='validationCustom02' class='form-label'>Phone Name</label>
                    <input name='item' type='text' class='form-control' id='validationCustom02'  required value='".$value['phoneName']."'>
                </div>
                
                <div id='column3' class='col-md-4'>
                    <label for='validationCustomUsername' class='form-label'>Price</label>
                    <div class='input-group has-validation'>
                        <input name='price' type='text' class='form-control' id='validationCustomUsername' aria-describedby='inputGroupPrepend'
                            value='N ".number_format($value['price'],2)."' required>
                    </div>
                </div>

                 <div class='col-md-4'>
                    <label for='validationCustom05' class='form-label'>phone ID</label>
                    <input name='phoneID' type='text' class='form-control' id='validationCustom05' required value='".$value['srNO']."'>
                </div>

                 <div class='col-md-4'>
                    <label for='validationCustom05' class='form-label'>Quantity</label>
                    <input name='quantity' type='text' class='form-control' id='validationCustom05' required value='".$value['quantity']."'>
                </div>

                <div class='col-md-4'>
                    <label for='validationCustom05' class='form-label'>Total</label>
                    <input name='total' type='text' class='form-control' id='validationCustom05' required value='N ".number_format($value['price'] * $value['quantity'],2)."'>
                </div>
               
                <div class='col-md-4'>
                    <label for='validationCustom03' class='form-label'>Full Name</label>
                   <input name='name' type='text' class='form-control' id='validationCustom03' required value='".$_SESSION['FNAME']." ".$_SESSION['LNAME']."'>
                </div>

                  <div class='col-md-4'>
                    <label for='validationCustom03' class='form-label'>Phone Number</label>
                   <input name='number' type='text' class='form-control' id='validationCustom03' required value='".$_SESSION['PHONENO']."'>
                </div>

                <div  class='col-md-4'>
                    <label for='validationpassword' class='form-label'>State</label>
                    <input name='state' type='text' id='validationpassword' class='form-control' required value='".$_SESSION['STATE']."'>
                </div>

                <div  class='col-md-4'>
                    <label for='validationpassword' class='form-label'>Local Government Area</label>
                    <input name='lga' type='text' id='validationpassword' class='form-control' required >
                    <div class='invalid-feedback'>
                        please provide a correct LGA.
                    </div>
                </div>

                <div  class='col-md-4'>
                    <label for='validationCustom04' class='form-label'>Address</label>
                    <input name='add' type='text' class='form-control' id='validationCustom04' required value='". $_SESSION['ADDRESS']."'>
                    <div class='invalid-feedback'>
                        Please provide a valid Address.
                    </div>
                </div>
                
                <div class='col-md-4'>
                    <label for='validationCustom05' class='form-label'>Zip Code</label>
                    <input name='zipcode' type='text' class='form-control' id='validationCustom05' required value='".$_SESSION['ZIPCODE']."'>
                </div>

                <div class='col-md-4'>
                    <label for='validationCustom06' class='form-label'>DATE</label>
                    <input name='date' type='date' class='form-control' id='validationCustom06' required >
                </div>

                <div  class='col-md-4'>
                    <label for='validationCustom06' class='form-label'>Payment Option</label>
                    <select name='payment' class='form-select' id='validationCustom06' required>
                        <option selected disabled value=''>Choose...</option>
                        <option value='Bank Transfer'>Bank Tranfer</option>
                        <option value='Bank Card'>Bank Card</option>
                    </select>
                    <div class='invalid-feedback'>
                        Please select a payment option.
                    </div>
                </div>

                
                <a class='col-md-6' href='#'>    
                    <button id='button' name='submit' class='btn btn-lg text-white p-2' onclick='complete()'>PLACE ORDER</button>
                </a>

                <a id='bt' class='col-md-6 btn btn-lg btn-danger text-white p-2' href='phone.php?XX=clear'>    
                    CANCLE ORDER
                </a>

            </form>

 ";
 }
}

echo $form;
            
    ?>

    <?php
    
    
        // if(isset($_GET['XX'])){
        //     if($_GET['XX'] == "clear"){
        //         unset($_SESSION['buy']);
        //     }
        // }
    
    ?>

        
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


        let button = document.querySelctor("#button");

        function complete(){
            alert("Please complete your transaction")
        }
    </script>
</body>
</html>