<?php?>

<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Details of Commercial Vehicle</title>
    </head>

    <body>
        <div class="container mt-5 ">
            <h2 class="text-center mb-5">Details of Commercial Vehicle</h2>
            <div class="form-box">
                <form action='' id='commercial'>
                    <div class="form-group">
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Nature of load</label>
                        <input class="form-control col-lg-8 " type='text' id='load' placeholder='Enter nature of load carried at the time of accident'/><br>
                        <label class=" col-lg-4 ">No. of Passanger</label>
                        <input class="form-control col-lg-8 " type='number' id='psngr' placeholder='Enter No. of passanger'/><br>
                        <label class=" col-lg-4 ">G. R. Date</label>
                        <input class="form-control col-lg-8 " type='date' id='grdate'/><br>
                        <label class=" col-lg-4 ">G. R. No.</label>
                        <input class="form-control col-lg-8 " type='number' id='grn' placeholder='Enter G. R. No.'/><br>
                        <label class=" col-lg-4 ">No. of Permit</label>
                        <input class="form-control col-lg-8 " type='number' id='prmtn' placeholder='Enter No. of permit'/><br>
                        <label class=" col-lg-4 ">Permit Issuance Date</label>
                        <input class="form-control col-lg-8 " type='date' id='prmtid'/><br>
                        <label class=" col-lg-4 ">Permit Valid Upto</label>
                        <input class="form-control col-lg-8 " type='date' id='prmtup'/><br>
                        <label class=" col-lg-4 ">Fitness valid Upto</label>
                        <input class="form-control col-lg-8 " type='date' id='fitness'/><br>
                        <div class="text-center">
                    <a href=''><button type='submit' onclick='myfunction()' id="next-button">Next</button></a>
                </div>
                    </div>
                </form>
               
            </div>
        </div><br><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="commerciall.js"></script>
    <script>
       function myfunction() {
       location.replace("form1.php")
     }
   </script>
    </body>

</html>