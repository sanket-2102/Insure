<?php
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
    <div class="container mt-5 ">
        <h1 class="text-center mb-5">Garage Details</h1> 
        <div class="form-box">
            <form action='form9.php' method='POST'>
                <div class="form-group">
                    <label class=" col-lg-4 ">Name of Garage</label>
                    <input class="form-control col-lg-8 "  type='text' name='garage' placeholder='Enter name of garage'/><br>
                    <label class=" col-lg-4 ">Address</label>
                    <input class="form-control col-lg-8 "  type='text' name='ga' placeholder='Enter complete address'><br>
                    <label class=" col-lg-4 ">Mobile No.</label>
                    <input class="form-control col-lg-8 "  type='number' name='gpn' placeholder='Ener mobile no.'/><br>
                    <label class=" col-lg-4 ">Date when vehicle shifted to Garage</label>
                    <input class="form-control col-lg-8 "  type='date' name='gd'/><br><br>
                </div>
            </form>
            <div class="text-center">
                    <a href='form8.php'><button type='submit' id="next-button">Next</button></a>
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>