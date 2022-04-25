<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="static_files/css/index.css">
   
   <style>
      
    </style>
    <title>login into your account</title>

</head>
<body>
<div class="container">
    <div class="title"> Login into your account</div>
    <div class="content">
    <form action="logindetails.php" class="log-form" method="POST" id="log-account-form">
   <div class="user-details">
       <div class="input-box">
           <span class = "details">Email</span>
           <input type="email" id="email" placeholder="enter email" name="email" oninput="validateEmail()" required>
                    <p>message</p>
       </div>
       <div class="input-box">
           <span class = "details">Password</span>
           <input type="password" id="password" placeholder="password" name="password" oninput="validatePassword()" required>
                    <p>message</p>
       </div>
     
       <button class = "button" type="submit" id="btn" name="login" onclick="onlogin()" default>Login</button>
   </div>

        
       <h4 style="text-align: center; width: 100%; padding:10px;">Dont have an account?<a href="signup.php"> <span style="color:palevioletred">signup</span></a></h4>
    </div>

    </form>

    </div>

</div>
 

    <script src="static_files/js/login.js"></script>
</body>

</html>