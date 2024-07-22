<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>

    <div class="login">
        <div class="head">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <h1>Register</h1>

        <div class="form" method ="POST">

           <div class="name">
            <p> UserName:</p>
            <input type="text" placeholder="Enter Your Username" name="username">
            <br>
           </div>

           <div class="pass">
            <p>Password:</p>

            <input type="text" placeholder="Enter Your Password"> <i class="fa-solid fa-eye-slash"></i>
            <br>
           </div>

           <div class="pass">

            <p>Email:</p>
            <input type="email" placeholder="Enter your Email">
           </div>

           <div class="pass">

            <p>Mobile No.</p>
            <input type="number" placeholder="Enter your Mobile Number">
           </div>

        </div>

        <div class="btn">
            <input type="submit" value="Register Now" class="button" name="login">
            <p> Already Register &nbsp;&nbsp;<a href="#">Login now!</a></p>
        </div>

    </div>
    
</body>
</html>



