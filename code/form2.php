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

        <title>Contact Details</title>
    </head>

    <body>
        <div class="container mt-5 ">
            <h1 class="text-center mb-5">Contact Details of Claimant(Owner)</h1> 
            <div class="form-box">
                <form action='form2.php' method='POST'>
                    <div class="form-group">
                        <label class=" col-lg-4 ">Phone No.</label>
                        <input class="form-control col-lg-8 " type='number' name='phn' placeholder='Enter Phone No.'/><br>
                        <label class=" col-lg-4 ">Alternate Phone No.</label>
                        <input class="form-control col-lg-8 " type='number' name='aphn' placeholder='Enter any alternate Phone No.'/><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='mn' placeholder='Enter Mobile No.'/><br>
                        <label class=" col-lg-4 ">Alternate Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='amn' placeholder='Enter any alternate mobile No.'/><br>
                        <label class=" col-lg-4 ">Email id</label>
                        <input class="form-control col-lg-8 " type='text' name='email' placeholder='Enter Email ID'/><br>
                        <label class=" col-lg-4 ">D.O.B.</label>
                        <input class="form-control col-lg-8 " type='date' name='dob'/><br>
                        <label class=" col-lg-4 ">Aadhaar No.</label>
                        <input class="form-control col-lg-8 " type='number' name='adn' placeholder='Enter Aadhaar No.'/><br>
                        <label class=" col-lg-4 ">Pan No.</label>
                        <input class="form-control col-lg-8 " type='number' name='pan' placeholder='Enter Pan No.'/><br><br>

                        <label class=" col-lg-4 ">Insured Profession</label><br>
                        <span class="col-lg-4"><input type='radio' name='r1'><label>Private Service</label></span>
                        <input type='radio' name='r1'><label>Self Employed</label><br>
                        <label class=" col-lg-4 "></label>
                        <span class="col-lg-4"><input type='radio' name='r1'><label>Politician</label><br></span>
                        <input type='radio' name='r1'><label>Retired</label><br>
                        <label class=" col-lg-4 "></label>
                        <span class="col-lg-4"><input type='radio' name='r1'><label>Student</label><br></span>
                        <input type='radio' name='r1'><label>Government Service</label><br>
                      

                        <label class=" col-lg-4 ">Monthly Income</label>
                        <span class="col-lg-4"><input type='radio' name='r2'><label>Upto 20,000</label><br></span>
                        <input type='radio' name='r2'><label>20,001 to 50,000</label><br>
                        <label class=" col-lg-4 "></label>
                        <span class="col-lg-4"><input type='radio' name='r2'><label>50,001 to 1,00,000</label><br></span>
                        <input type='radio' name='r2'><label>1,00,001 and above</label>
                    </div>
                </form>
                <div class="text-center">
                <a href='form1.php'><button type='submit' id="next-button">Back</button></a>
                <a href='form3.php'><button type='submit' id="next-button">Next</button></a>
                </div>
            </div>
        </div><br><br>
    </body>
</html>
        