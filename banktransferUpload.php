<?php
session_start();

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
    
    #main-container{
        height: 100vh;
        width: 100%;
        justify-content: center;
        display: block;
        background-size: cover;
        background-position: center;
        background-image: url("images/formBG.jpg")
    }

    #main-container h1{
        padding-top: 110px;
    }

    /*form*/
    form #column2{
    margin:5% 0 0 0;
}

    /* footer */
.card-footer{
    margin-top: 12%;
}
.card-footer img{
   width: 30px; 
   margin-left: 32%;
}

.card-footer h5{
    margin-left: 20px;
    margin-top: 10px;
}

button{
    width: 15%;
}

button img{
    width: 30px;
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
    margin-right: 10%;
}


    
/*mobile view*/
@media all and (max-width: 500px){
   #main-container{
      height: 120%;
   }

    #main-container h1{
       font-size: 20px;
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

form #column2{
    margin:5% 0 0 0;
}

button{
    width: auto    
}

button img{
    display: none;
}

}
</style>

    
<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

    <div  id="main-container" class="container-fluid ">

            <h1 class="text-center text-white">UPLOAD PROOF OF PAYMENT</h1>

            <div id="form-section" class="container-fluid">

            <form action="function.php?upld=upload" method="POST" class=" row g-3 form needs-validation" novalidate enctype="multipart/formm-data">

            <div id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label text-white">User ID</label>
                    <input name="customerID" type="text" class="form-control" id="validationCustom02" required value='<?= $_SESSION['CUSTOMERID'] ?>'>
                
            </div>
               
            <div id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label text-white">PDF OR IMAGE</label>
                    <input name="file" type="file" class="form-control" id="validationCustom02" required>
                   
                    <div class="invalid-feedback">
                        please upload a document of proof
                  </div>
            </div>

            <div id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label text-white">Full NAME</label>
                    <input name="flname" type="text" class="form-control" id="validationCustom02" value='<?= $_SESSION['FNAME'] ?> <?= $_SESSION['LNAME']?>' required>
                
            </div>

            <div style="margin: 0;" id="column2" class="col-md-4">
                    <label for="validationCustom02" class="form-label text-white"></label>
                    <input name="email" type="hidden" class="form-control" id="validationCustom02" value='<?= $_SESSION['EMAIL'] ?>' required>
                
            </div>
 
                <div class="col-12">
                    <button id="button" name="submit" class="btn btn-lg btn-warning text-white p-2" type="submit"><img src="BOOTSTRAP/bootstrap-icons-1.9.1/upload.svg" alt="">UPLoad</button>
                </div>

            </form>

            

        </div>

            <div class="card-footer text-muted text center d-flex">
                <img src="images/location.png" class="img-fluid">
                <h5>futureFones FARM CENTER, KANO, NIGERIA, FAGGE </h5>
            </div>
    </div>
    
    <script>

        var sec = 1800,
        
            demo = document.getElementById("demo"),
            secpass, 
            countdown = setInterval(function() {
                'use strict';

                secpass();
            }, 1000);

        function secpass(){

             'use strict';

        var min = Math.floor(sec / 60),
            remSec = sec % 60;

        if (remSec < 10) {
            remSec = '0' + remSec;
        }

        if (min < 10) {

            min = '0' + min;
        }

        demo.innerHTML = min + ":" + remSec

        if (sec > 0){
            sec = sec - 1;
        }else{
            clearInterval(countDown);

            demo.innerHTML = 'time expired';
        }

    }

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
