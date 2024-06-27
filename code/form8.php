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

        <title>Bank Details</title>
    </head>

    <body>
        <div class="container mt-5 ">
            <h2 class="text-center mb-5">Bank Details</h2>
            <div class="form-box">
                <form action='' id='bank'>
                <div class="form-group">
                <label class=" col-lg-4 ">Vehicle No.</label>
                    <input class="form-control col-lg-8 " type='text' id='vr' placeholder='Enter Vehicle No.'/>
                    <label class=" col-lg-4 ">Name of Bank Account Holder</label>
                        <input class="form-control col-lg-3" type='text' id='bsn' placeholder='Sirname'/>
                        <input class="form-control col-lg-3" type='text' id='bfn' placeholder='Firstname'/>
                        <input class="form-control col-lg-2" type='text' id='bln' placeholder='middlename'/><br>
                    <label class=" col-lg-4 ">Bank Account No.</label>
                        <input class="form-control col-lg-8 " type='number' id='ban' placeholder='Enter Bank Account No.'/><br>
                    
                        <label class=" col-lg-4 ">Account Type</label><br>
                     <select class=" col-lg-8  form-control" id="banktype">
                        <option value="select">--Select--</option> 
                        <option value="saving">Saving</option>
                         <option value="current">Current</option>
                         </select><br>
                   

                    
                    
                        <label class=" col-lg-4 ">Name of the Bank</label>
                        <input  class="form-control col-lg-8 "type='text' id='bn' placeholder='Enter bank name'/><br>
                    <label class=" col-lg-4 ">Branch</label>
                        <input  class="form-control col-lg-8 "type='text' id='bb' placeholder='Enter branch name'/><br>
                    <label class=" col-lg-4 ">MICR Code</label>
                        <input class="form-control col-lg-8 " type='number' id='micr' placeholder='9 digit MICR code of bank'/><br>
                    <label class=" col-lg-4 ">IFSC Code</label>
                        <input class="form-control col-lg-8 " type='number' id='ifsc' placeholder='11 character code appearing on cheque leaf'/><br>
                        <div class="text-center">
                    <a href=''><button type='submit' onclick='myfunction()'  id="next-button">Accident</button></a>
                    <a href=''><button type='submit' onclick='myfunction1()'  id="next-button">Theft</button></a><br>
                    
                    </div>
                </div>
                </form>
                    
            </div>
        </div>    <br><br>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="bankkk.js"></script>
    
    <script>
       function myfunction() {
       location.replace("form4.html")
     }
   </script>
   <script>
    function myfunction1() {
    location.replace("theft.php")
  }
</script>
    </body>
</html>
        