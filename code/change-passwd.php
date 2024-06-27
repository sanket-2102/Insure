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
    <h1 class="text-center">Change Password</h1>
    <form action=" " method="POST">
       <br>
        <div class="form-group position-relative">
        <input type="password" id="password" name="password" placeholder="Current Password" class="login-input-box" required>
        <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
        </div>
        
        <div class="form-group position-relative">
        <input type="password" id="password" name="password" placeholder="New Password" class="login-input-box" required>
        <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
        </div>

        <div class="form-group position-relative">
        <input type="password" id="password" name="password" placeholder="Confirm New Password" class="login-input-box" required>
        <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
        </div>
        
        <br>
        <a href="admin-login.php"><button type="button" id="login" name="login" class="sign-in-button">Submit</button></a>
        
        
        
    </form>

</div>
   
</body>
</html>
