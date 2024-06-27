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

        <title>Theft claim</title>
    </head>

    <body>
        <div class="container mt-5 ">   
            <h2 class="text-center mb-5">Theft Claim</h2>
            <div class="form-box">
                <form action='form7.php' method='POST'>
                    <div class="form-group">
                        <label class=" col-lg-4 ">Place</label>
                        <input class="form-control col-lg-8 " type='text' name='pot' placeholder='Enter place of Theft'/><br>
                        <label class=" col-lg-4 ">Date</label>
                        <input class="form-control col-lg-8 " type='date' name='dot'/><br>
                        <label class=" col-lg-4 ">Time</label>
                        <input class="form-control col-lg-8 "  type='time' name='tot'/><br>
                        <label class=" col-lg-4 ">Police Station</label>
                        <input class="form-control col-lg-8 " type='text' name='pst' placeholder='Enter name of police station'/><br>
                        <label class=" col-lg-4 ">FIR No.</label>
                        <input class="form-control col-lg-8 " type='number' name='firt' placeholder='Enter FIR No.'/><br>
                        <label class=" col-lg-4 ">Date of FIR</label>
                        <input class="form-control col-lg-8 " type='date' name='doft'/><br><br>

                        <label class=" col-lg-4 ">Noticed By</label>
                        <input class="form-control col-lg-8 " type='text' name='nbt' placeholder='By whom it was first noticed'/><br>
                        <label class=" col-lg-4 ">Time</label>
                        <input class="form-control col-lg-8 " type='time' name='ton'/><br>

                        <label class=" col-lg-4 ">Name of Witness</label>
                        <input class="form-control col-lg-3" type='text' name='wsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' name='wfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' name='wln' placeholder='lastname'/><br>

                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' name='wa' placeholder='Enter complete address'><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='wpn' placeholder='Ener mobile no.'/><br><br>

                        <Label class=" col-lg-4 ">Who was having that vehicle</label>
                        <input class="form-control col-lg-3" type='text' name='nsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' name='nfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' name='nln' placeholder='lastname'/><br>
                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' name='na' placeholder='Enter complete address'><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='npn' placeholder='Ener mobile no.'/><br><br>
                        <label class=" col-lg-4 ">Relationship</label>
                        <input class="form-control col-lg-8 " type='text' name='relation' placeholder='What is your relationship with person'/><br>
                        <label class=" col-lg-4 ">Purpose</label>
                        <input class="form-control col-lg-8 " type='text' name='purpose' placeholder='For what purpose he/she was having the vehicle'/><br>
                    </div>
                    <div class="text-center">
                        <a href='form8.php'><button type='submit' id="next-button">Back</button></a>    
                        <a href='documents2.php'><button type='submit' id="next-button">Next</button></a>
                    </div>
                </form>
            </div>
                <br><br>
        </div>
    </body>
</html>