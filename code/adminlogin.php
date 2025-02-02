<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="../css/newlogin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Login</title>
    </head>
    
    <body class="login-page" style ="background-image: linear-gradient(to right, #075586, #67b9e6) !important">
    <div class="sign-in-form">
    <img src="../images/avatar.jpg" alt="Avatar" class="avatar">
    <h1 class="text-center">Sign In</h1>
    
    <form action=" " id="login">
       
        <div class="form-group position-relative">
        <input type="text" id="username"  placeholder="Username" class="login-input-box">
        <i class="fa fa-user fa-lg position-absolute"></i>
        </div>
        <div class="form-group position-relative">
        <input type="password" id="password" placeholder="Password" class="login-input-box" >
        <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
        </div>
        <br>
        <a href=""><button type="submit" id ="sign"  class="sign-in-button">Sign In</button></a>
        <hr style="height:2px; border-width:0; color:#007CC7; background-color:#007CC7; ">
        <!--p class="or">OR</p>
        <button type="button" id="login-google" name="login-google" class="google-button">Sign In with Google</button-->        
        
        
    </form>

</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="adlogin.js"></script>
    <script>
        
    </script>
</body>
</html>
