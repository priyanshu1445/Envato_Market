<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>

    <div class="login">
        <div class="head">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <h1>Login</h1>

        <div class="form" method ="POST">

           <div class="name">
            <p>Your Name:</p>
            <input type="text" placeholder="Enter Your Name" name="username">
            <br>
           </div>

           <div class="pass">
            <p>Password:</p>

            <input type="text" placeholder="Enter Your Password"> <i class="fa-solid fa-eye-slash"></i>
            <br>
           </div>

           <div class="check">
            <div class="ctxt"> <input type="checkbox" > <span>Remember me</span></div>
            <div class="forget">
                <p>Forget Password?</p>
            </div>
           </div>
        </div>

        <div class="btn">
            <input type="submit" value="Login" class="button" name="login">
            <p> Not Register yet? <a href="#">Sign Up</a></p>
        </div>

    </div>
    
</body>
</html>



