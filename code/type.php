<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJST Insurance</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
       
        .type-page{
         
            width:100%; height:100%;
            text-align:center;
            top:50%;
            left:50%;
            position:absolute;
            -ms-transform:translate(-50%,-50%);
            transform:translate(-50%,-50%);
          
            z-index: -1;
            background-image:linear-gradient( 160deg, #67b9e6 55%, #fff 0%)  ;
        }

        .types{
            padding:50px !important;
           margin-top:25%;
        }
        .types:hover{
        transform: translateY(-2%);
        box-shadow: 0 0 5px 0;
        background-image:linear-gradient(to right, #075586, #67b9e6) ;
        }

        .b1{
            width: 250px;
            height: 50px;
            margin :10px;
            border: 1px solid black;
    border-radius: 30px;
    background-image:linear-gradient(to right, #075586, #67b9e6) ;
    color: white;
    font-weight: bold;
        }
    
    </style>

</head>

    <body>
    <section class="type-page">
        <div class="container">
            <div class="row">
            
                <div class=" types col-lg-4 col-md-4 col-12">
                    <i class="fa fa-3x fa-car" aria-hidden="true"></i><br>
                    <a href="form1.php"><button class="b1">Car Claim</button></a>
                </div>

                <div class="types col-lg-4 col-md-4 col-12">
                    <i class="fa fa-3x fa-motorcycle" aria-hidden="true"></i><br>
                    <a href="form1.php"><button class="b1">Bike Claim</button></a>
                </div>

                <div class="types col-lg-4 col-md-4 col-12">
                    <i class="fa fa-3x fa-truck" aria-hidden="true"></i><br>
                    <a href="commercial.php"><button class="b1">Commercial Vehicle Claim</button></a>
                </div>

                
            </div>
        </div>
    </section>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>