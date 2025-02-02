<?php
?>

<!DOCTYPE html>
<html lang="en">
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

        <title>Personal Details</title>
    </head>

    <body>
       <div class="container mt-5 ">
       
            <h2 class="text-center mb-5">Personal Details of Claimant(Owner)</h2> 
            <div class="form-box">
                <form action=" " id='personal'>
                    <div class="form-group">
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vhr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Policy No.</label>
                        <input class="form-control col-lg-8 " type='number' id='policyno' placeholder='Enter Policy No.'/>
                        <label class=" col-lg-4 ">Cover Note No.</label>
                        <input class="form-control col-lg-8 " type='number' id='coverno' placeholder='Enter Cover Note No.'/>
                        <label class=" col-lg-4 ">Policy Period From</label>
                        <input class="form-control col-lg-8 " type='date' id='policyfrom'>
                        <label class=" col-lg-4 ">to</label>
                        <input class="form-control col-lg-8 " type='date' id='policytill'>
                        <label class=" col-lg-4 ">Full Name</label>
                        <input class="form-control col-lg-3" type='text' id='fulllast' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' id='fullfirst' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' id='fullmiddle' placeholder='Middlename'/>
                        <label class=" col-lg-4 ">Gender</label><br>
                     <select class=" col-lg-8  form-control" id="gender">
                        <option value="select">--Select--</option> 
                        <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         </select><br>
                
                        <label class=" col-lg-4 ">Address for Communication</label>
                        <label class="col-lg-8"> :</label>
                        <label class=" col-lg-4 ">Flat/Building</label>
                        <input class=" col-lg-8  form-control" type='text' id='buildingname' placeholder='Enter Flat/Building name'/><br>
                        <label class=" col-lg-4 ">Road/Street/Sector</label>
                        <input  class=" col-lg-8  form-control" type='text' id='streetname' placeholder='Enter Road/Street/Sector'/><br>
                        <label class=" col-lg-4 ">Nearest LandMark</label>
                        <input class=" col-lg-8  form-control" type='text' id='landmark' placeholder='Enter Nearest LandMark'/><br>
                        <label class=" col-lg-4  ">Village/City</label>
                        <input class=" col-lg-8  form-control" type='text' id='city' placeholder='Enter Village/City'/><br>
                        <label class=" col-lg-4 ">Taluka</label>
                        <input class=" col-lg-8  form-control" type='text' id='taluka' placeholder='Enter Taluka'/><br>
                        <label class=" col-lg-4 ">District</label>
                        <input class=" col-lg-8  form-control" type='text' id='district' placeholder='Enter District'/><br>
                        <label class=" col-lg-4 ">Pin Code</label>
                        <input class=" col-lg-8  form-control" type='number' id='pincode' placeholder='Enter pin code'/><br>
                        <label class=" col-lg-4 ">State</label>
                        <input class=" col-lg-8  form-control" type='text' id='state' placeholder='Enter State'/><br><br>
                        <div class="text-center">
                        <a href=''><button  type='submit' onclick='myfunction()' id="next-button">Next</button></a>
                        </div>
                    </div>
                </form>
                <!--div class="text-center"><a href='form2.php'><button type='submit' id="next-button">Next</button></a></div-->
            </div>

            <br><hr>
            <!----------------------------------------------Contact Details------------------------------------------------------>

            <h2 class="text-center mb-5">Contact Details of Claimant(Owner)</h2> 
            <div class="form-box">
                <form action=" " id='contact'>
                    <div class="form-group">
                    <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vr' placeholder='Enter Vehicle No.'/>
                        <label class=" col-lg-4 ">Phone No.</label>
                        <input class="form-control col-lg-8 " type='number' id='phn' placeholder='Enter Phone No.'/><br>
                        <label class=" col-lg-4 ">Alternate Phone No.</label>
                        <input class="form-control col-lg-8 " type='number' id='aphn' placeholder='Enter any alternate Phone No.'/><br>
                        <label class=" col-lg-4 ">Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' id='mn' placeholder='Enter Mobile No.'/><br>
                        <label class=" col-lg-4 ">Alternate Mobile No.</label>
                        <input class="form-control col-lg-8 " type='number' id='almn' placeholder='Enter any alternate mobile No.'/><br>
                        <label class=" col-lg-4 ">Email id</label>
                        <input class="form-control col-lg-8 " type='text' id='email' placeholder='Enter Email ID'/><br>
                        <label class=" col-lg-4 ">D.O.B.</label>
                        <input class="form-control col-lg-8 " type='date' id='dob'/><br>
                        <label class=" col-lg-4 ">Aadhaar No.</label>
                        <input class="form-control col-lg-8 " type='number' id='adn' placeholder='Enter Aadhaar No.'/><br>
                        <label class=" col-lg-4 ">Pan No.</label>
                        <input class="form-control col-lg-8 " type='number' id='pan' placeholder='Enter Pan No.'/><br>

                        <label class=" col-lg-4 ">Insured Profession</label><br>
                     <select class=" col-lg-8  form-control" id="profession">
                        <option value="select">--Select--</option> 
                        <option value="PrivateService">Private Service</option>
                         <option value="SelfEmployed">Self Employed</option>
                         <option value="politician">Politician</option>
                         <option value="retired">Retired</option>
                         <option value="student">Student</option>
                         <option value="GovernmentService">Government Service</option>
                         </select><br>
                   

                         <label class=" col-lg-4 ">Monthly Income</label><br>
                         <select class=" col-lg-8  form-control" id="income">
                            <option value="select">--Select--</option> 
                            <option value="20000">Upto 20,000</option>
                             <option value="20001to50000">20,001 to 50,000</option>
                             <option value="50001to100000">50,001 to 1,00,000</option>
                             <option value="above1">Above 1,00,000</option>
                             </select>
                        <div class="text-center">
                <a href=''><button type='submit' onclick='myfunction1()' id="next-button">Next</button></a>
                </div>
                    </div>
                </form>
                
            </div>
            <!-------------------------------------------Contact Details end -------------------------------------------------->
            
        
        </div>
        <br><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
     <script src="claim1bbb.js"></script>
     <script src="claim1aa.js"></script>
     <script>
        function myfunction() {
        location.replace("#contact")
      }
    </script>
    <script>
        function myfunction1() {
        location.replace("form3.php")
      }
    </script>
    </body>
</html>