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
            <h1 class="text-center mb-5">Vehicle Details</h1> 
            <div class="form-box">
                <form action='' id='vehicle'>
                    <div class="form-group">
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Registration No.</label>
                        <input class="form-control col-lg-8 " type='number' id='rn' placeholder='Enter Registration No.'/><br>
                        <label class=" col-lg-4 ">Date of Registration</label>
                        <input class="form-control col-lg-8 " type='date' id='dor'><br>
                        <label class=" col-lg-4 ">Date of Purchase Vehicle</label>
                        <input class="form-control col-lg-8 " type='date' id='dovp'><br>
                        <label class=" col-lg-4 ">Chassis No.</label>
                        <input class="form-control col-lg-8 " type='number' id='cn' placeholder='Enter Chassis No.'/><br>
                        <label class=" col-lg-4 ">Engine No.</label>
                        <input class="form-control col-lg-8 " type='number' id='en' placeholder='Enter Engine No.'/><br>
                        <label class=" col-lg-4 ">Make</label>
                        <input class="form-control col-lg-8 " type='text' id='make' placeholder='Enter make of vehicle'/><br>
                        <label class=" col-lg-4 ">Model</label>
                        <input class="form-control col-lg-8 " type='text' id='model' placeholder='Enter Model name'/><br>
                        <label class=" col-lg-4 ">Name of Finaciers</label>
                        <input class="form-control col-lg-8 " type='text' id='nf' placeholder='Enter name of financiers'><br><br>
                        
                        <label class=" col-lg-4 ">Class of Vehicle</label><br>
                    <select class=" col-lg-8  form-control" id="classv">
                        <option value="select">--Select--</option> 
                        <option value="Private">Private</option>
                         <option value="Two-Wheeler">Two-Wheeler</option>
                         <option value="Four-Wheeler">Four-Wheeler</option>
                         <option value="Commercial">Commercial</option>
                         </select><br>
                    
                    <label class=" col-lg-4 ">Vehicle Fitted with LPG/CNG</label><br>
                    <select class=" col-lg-8  form-control" id="gas">
                        <option value="select">--Select--</option> 
                        <option value="yes">Yes</option>
                         <option value="no">No</option>
                         </select><br>

                    <label class=" col-lg-4 ">Vehicle Fitted with Anti theft device</label><br>
                    <select class=" col-lg-8  form-control" id="antitheft">
                        <option value="select">--Select--</option> 
                        <option value="Yes">yes</option>
                         <option value="No">no</option>
                         </select>
                        <div class="text-center">
                      
                      <a href=''><button type='submit' onclick='myfunction1()' id="next-button">Next</button></a>
                  </div>
                    </div>
                </form>
            </div>
                <br> <br>

            <h2 class="text-center mb-5">Details of Driver</h2>
            <div class="form-box">
            
                <form action='' id='driver'>
                    <div class="form-group">    
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vhr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Name</label>
                        <input class="form-control col-lg-3" type='text' id='dsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' id='dfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' id='dln' placeholder='Middlename'/>
                        <label class=" col-lg-4 ">Address</label>
                        <input class="form-control col-lg-8 " type='text' id='da' placeholder='Enter complete address'>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' id='dmn' placeholder='Ener mobile no.'/><br>
                        
                        <label class=" col-lg-4 ">Gender</label><br>
                    <select class=" col-lg-8  form-control" id="gender">
                        <option value="select">--Select--</option> 
                        <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         </select><br>

                        <label class=" col-lg-4 ">D.O.B.</label>
                        <input class="form-control col-lg-8 " type='date' id='ddob'/><br>
                        <label class=" col-lg-4 ">Licence No.</label>
                        <input class="form-control col-lg-8 " type='number' id='dlsn' placeholder='Enter licence no.'/><br>
                        
                        <label class=" col-lg-4 ">Licence Typer</label><br>
                    <select class=" col-lg-8  form-control" id="license">
                        <option value="select">--Select--</option> 
                        <option value="Permanent">Permanent</option>
                         <option value="Learning">Learning</option>
                         </select><br>

                    <label class=" col-lg-4 ">Type of Vehicle authorised to drive</label>
                    <select class=" col-lg-8  form-control" id="vehicletype">
                        <option value="select">--Select--</option> 
                        <option value="HGV">HGV</option>
                         <option value="Motorcycle">Motor Cycle</option>
                         <option value="LMV">LMV</option>
                         <option value="transport">Transport</option>
                         </select><br>
                    
                    <label class="col-lg-4">Driver</label>
                    <select class=" col-lg-8  form-control" id="drivertype">
                        <option value="select">--Select--</option> 
                        <option value="paid">Paid Driver</option>
                         <option value="owner">Owner</option>
                         </select><br>

                    <label class="col-lg-4">Driver under influence of alcohol</label>
                    <select class=" col-lg-8  form-control" id="alcohol">
                        <option value="select">--Select--</option> 
                        <option value="yes">Yes</option>
                         <option value="no">No</option>
                         </select><br>

                    <label class="col-lg-4">Driver involved in any other accident in last 2 years</label>
                    <select class=" col-lg-8  form-control" id="past">
                        <option value="select">--Select--</option> 
                        <option value="Yes">Yes</option>
                         <option value="No">No</option>
                         </select><br>
                        <div class="text-center">
                      
                    <a href=''><button type='submit' onclick='myfunction()' id="next-button">Next</button></a>
                </div>
                    </div>
                </form>
                
            </div>
            </div>
        </div>
        <br><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="claim2aaa.js"></script>
    <script src="claim2bbbb.js"></script>
    <script>
       function myfunction() {
       location.replace("form8.php")
     }
   </script>
   <script>
    function myfunction1() {
    location.replace("#driver")
  }
</script>
    </body>
</html>