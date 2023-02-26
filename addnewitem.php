<?php
    session_start();
    require("adminNavbar.php");
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
    margin: 0 30px 0 30px;
}

 #column1{
    margin-top: 12%;
}

#column2{
    margin-top: 12%;
}

#column3{
    margin-top: 12%;
} 

label{
    color: white;
}

#button{
    background: rgb(223, 226, 17);
    width: 25%;
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
    height: 106vh;
}

#form-section form{
    margin: 10px;
}

#column1{
    margin-top: 40%;
}

#column2{
    margin-top: 5%;
}

#column3{
    margin-top: 5%;
}

#button{
    width: 50%;
}

.card-footer{
    margin-top: 20%;
}

.card-footer img{
  display: none;
}

.card-footer h5{
    font-size: 18px;
}
}
</style>


        <!-- form section -->
        <div id="form-section" class="container-fluid">

            <form action="function.php?add=additem" method="POST" class=" row g-3 form needs-validation" novalidate enctype="multipart/formm-data">

                <div id="column1" class="col-md-4">
                    <label for="validationCustom01" class="form-label">PHONE NAME</label>
                    <input name="pname" type="text" class="form-control" id="validationCustom01" required >

                   
                </div>

                <div id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label">PHONE IMAGE</label>
                    <input name="image" type="file" class="form-control" id="validationCustom02" onchange="readURL(this)" accept="image/*"  required>
                   
                </div>

                <div id="column3" class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">PRICE</label>
                    <div class="input-group has-validation">
                        <input name="price" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                            required>
                       
                    </div>
                </div>

                <div  class="col-md-4">
                    <label for="validationpassword" class="form-label">DETAILS</label>
                    <input name="details"  class="form-control" required>
                   
                </div>
 
                <div class="col-12">
                    <button id="button" name="submit" class="btn btn-lg text-white p-2" type="submit">UPDATE</button>
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