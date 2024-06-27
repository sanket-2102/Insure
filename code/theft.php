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
                <form action='' id='theft'>
                    <div class="form-group">
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Place</label>
                        <input class="form-control col-lg-8 " type='text' id='pot' placeholder='Enter place of Theft'/><br>
                        <label class=" col-lg-4 ">Date</label>
                        <input class="form-control col-lg-8 " type='date' id='dot'/><br>
                        <label class=" col-lg-4 ">Time</label>
                        <input class="form-control col-lg-8 "  type='time' id='tot'/><br>
                        <label class=" col-lg-4 ">Police Station</label>
                        <input class="form-control col-lg-8 " type='text' id='pst' placeholder='Enter name of police station'/><br>
                        <label class=" col-lg-4 ">FIR No.</label>
                        <input class="form-control col-lg-8 " type='number' id='firt' placeholder='Enter FIR No.'/><br>
                        <label class=" col-lg-4 ">Date of FIR</label>
                        <input class="form-control col-lg-8 " type='date' id='doft'/><br><br>

                        <label class=" col-lg-4 ">Noticed By</label>
                        <input class="form-control col-lg-8 " type='text' id='nbt' placeholder='By whom it was first noticed'/><br>
                        <label class=" col-lg-4 ">Time</label>
                        <input class="form-control col-lg-8 " type='time' id='ton'/><br>

                        <label class=" col-lg-4 ">Name of Witness</label>
                        <input class="form-control col-lg-3" type='text' id='wsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' id='wfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' id='wln' placeholder='lastname'/><br>

                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' id='wa' placeholder='Enter complete address'><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' id='wpn' placeholder='Ener mobile no.'/><br><br>

                        <Label class=" col-lg-4 ">Who was having that vehicle</label>
                        <input class="form-control col-lg-3" type='text' id='nsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' id='nfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' id='nln' placeholder='lastname'/><br>
                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' id='na' placeholder='Enter complete address'><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' id='npn' placeholder='Ener mobile no.'/><br><br>
                        <label class=" col-lg-4 ">Relationship</label>
                        <input class="form-control col-lg-8 " type='text' id='relation' placeholder='What is your relationship with person'/><br>
                        <label class=" col-lg-4 ">Purpose</label>
                        <input class="form-control col-lg-8 " type='text' id='purpose' placeholder='For what purpose he/she was having the vehicle'/><br>
                        <div class="text-center">
                
                <a href=''><button type='submit' onclick='myfunction()' id="next-button">Next</button></a>
                </div>
                    </div>
                </form>
                
            </div>
                <br><br>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="theftt.js"></script>
    <script>
       function myfunction() {
       location.replace("documents2.html")
     }
   </script>
    </body>
</html>

<!--div class="text-center">
                        <a href='form8.php'><button type='submit' id="next-button">Back</button></a>    
                        <a href='documents2.php'><button type='submit' id="next-button">Next</button></a>
                    </div>