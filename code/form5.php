<?php
?>

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

        <title>Driver Details</title>
    </head>

    <body>

        <div class="container mt-5 ">

            
            <h2 class="text-center mb-5">Details of Driver</h2>
            <div class="form-box">
            
                <form action='form5.php' method='POST'>
                    <div class="form-group">    
                        
                        <label class=" col-lg-4 ">Name</label>
                        <input class="form-control col-lg-3" type='text' name='dsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' name='dfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' name='dln' placeholder='Middlename'/>
                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' name='da' placeholder='Enter complete address'>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='dpn' placeholder='Ener mobile no.'/><br>
                        
                        <label class=" col-lg-4 ">Gender</label><br>
                        <span class="col-lg-4"><input type='radio' name='r8'><label>Male</label></span>
                        <input type='radio' name='r8'><label>Female</label>

                        <label class=" col-lg-4 ">D.O.B.</label>
                        <input class="form-control col-lg-8 " type='date' name='ddob'/><br>
                        <label class=" col-lg-4 ">Licence No.</label>
                        <input class="form-control col-lg-8 " type='number' name='dln' placeholder='Enter licence no.'/><br>
                        
                        <label class=" col-lg-4 ">Licensing Authority</label>
                        <input class="form-control col-lg-8 " type='text' name='dla' placeholder='Enter Licensing Authority'><br>
                        <label class=" col-lg-4 ">Valid Upto</label>
                        <input class="form-control col-lg-8 " type='date' name='dva'/><br><br>

                        <label class=" col-lg-4 ">Licence Typer</label><br>
                        <span class="col-lg-4"><input type='radio' name='r11'><label>Permanent</label><br></span>
                        <input type='radio' name='r12'><label>Learning</label><br>

                        <label class=" col-lg-4 ">Type of Vehicle authorised to drive</label>
                        <span class="col-lg-4"><input type='radio' name='r9'><label>HGV</label><br></span>
                        <input type='radio' name='r9'><label>Transport</label><br>
                        <label class=" col-lg-4 "></label>
                        <span class="col-lg-4"><input type='radio' name='r9'><label>Motor Cycle</label><br></span>
                        <input type='radio' name='r9'><label>LMV</label><br>
                        
                        <label class="col-lg-4">Driver</label>
                        <span class="col-lg-4"> <input type='radio' name='r10'><label>Paid Driver</label><br></span>
                        <input type='radio' name='r10'><label>Owner</label><br>

                        <label class="col-lg-4">Driver under influence of alcohol</label>
                        <span class="col-lg-4">  <input type='radio' name='r11'><label>Yes</label><br></span>
                        <input type='radio' name='r11'><label>No</label><br>

                        <label class="col-lg-4">Driver involved in any other accident in last 2 years</label>
                        <span class="col-lg-4"> <input type='radio' name='r13'><label>Yes</label><br></span>
                        <input type='radio' name='r13'><label>No</label><br><br>
                    </div>
                </form>
                <div class="text-center">
                    <a href='form3.php'><button type='submit' id="next-button">Back</button></a>    
                    <a href='form4.php'><button type='submit' id="next-button">Accident</button></a>
                    <a href='form7.php'><button type='submit' id="next-button">Theft</button></a>
                </div>
            </div>
        </div><br><br>
    </body>
</html>