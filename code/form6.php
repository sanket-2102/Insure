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
            <h1 class="text-center mb-5">Third Party Damage</h1> 
            <div class="form-box">
                <form action='form6.php' method='POST'>
                    <div class="form-group">
                        <label class=" col-lg-4 ">Type of Loss</label>
                        <input class="form-control col-lg-8 " type='text' name='loss' placeholder='Enter kind of loss'/><br>
                        <label class=" col-lg-4 ">Name of victim</label>
                        <input class="form-control col-lg-3 " type='text' name='vsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3 " type='text' name='vfn' placeholder='Firstname'/>
                        <input  class="form-control col-lg-2 " type='text' name='vln' placeholder='lastname'/><br>
                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' name='va' placeholder='Enter complete address'><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' name='vpn' placeholder='Ener mobile no.'/><br>
                        <label class=" col-lg-4 ">Gender</label><br>
                        <span class="col-lg-4"><input type='radio' name='r13'><label>Male</label></span>
                        <input type='radio' name='r13'><label>Female</label>
                        <label class=" col-lg-4 ">Status</label>
                        <input  class="form-control col-lg-8 " type='text' name='status' placeholder='Enter Status of victim'/><br>
                    </div>
                </form>
                <div class="text-center">
                    <a href='form5.php'><button type='submit' id="next-button">Back</button></a>
                    <a href='form9.php'><button type='submit' id="next-button">Next</button></a>
                </div>
            </div>
           

         
        </div>
        <br><br>
    </body>
</html>'