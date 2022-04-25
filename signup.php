 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static_files/css/index.css" >
    <style>
 

        /* validation part  */

        /* validation end  */
    </style>

    <title> sign up</title>
</head>

<body >
    <div class="container">
    <div class="title"> Create account</div>
    <div class="content">
        <form action="signup_details_to_db.php" class="create-form" method="POST" id="form-details">
                
            <div class ="user-details">
                <!-- first name -->
                <div class="input-box">
                    <span class ="firstname">First Name :</span>
                    <input type="text" id="firstname" name="firstname" placeholder="first name" oninput="validateFirstName()" required>
                    <p>message</p>
                </div>

                <!-- second name -->
                <div class="input-box">
                    <span class="secondname">SECOND NAME:</label>
                    <input type="text" id="secondname" name="secondname" placeholder="second name" oninput="validateSecondName()" required>
                    <p>message</p>
                </div>
                <!-- gender -->
                <div class="input-box">
                    <span class="details">GENDER:</span>
                    <select class="select" name="gender" id="gender" oninput="validateGender()" required>
                        <option value="">gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>
                    <p>message</p>
                </div>

                <!-- country -->
                <div class="input-box">
                    <span class="details"> COUNTRY:</span>
                    <input name="country" id="country" oninput="validateCountry()" required>
                    <p>message</p>
                </div>

                <!-- county -->
                <div class="input-box">
                    <span for="details"> COUNTY:</span>
                    <input name="county" id="county" oninput="validateCounty()" required>
                     
                    <p>message</p>
                </div>

                <!-- email -->
                <div class="input-box">
                    <span class="details">EMAIL:</span>
                    <input type="email" id="email" name="email" placeholder="email" oninput="validateEmail()" required>
                    <p>message</p>
                </div>

                <!-- password -->
                <div class="input-box">
                    <span class="details">PASSWORD:</span>
                    <input type="password" id="password" name="password" placeholder="password" oninput="validatePassword()" required>
                    <p>message</p>
                </div>

                <!-- confirmpassword -->
                <div class="input-box">
                    <span class="details">CONFIRM PASSWORD:</span>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirm password" oninput="validateConfirmPassword()" required>
                    <p>message</p>
                </div>
                <div class="button">
              <input type="submit" value=" sign up" name = "signup" >
                <h2 style="text-align: center; width: 100%; padding:10px;"> Already have an account <a href="login.php"><span style="color:green;">Login</span></a></h2>
                
            </div>

        </form>
    </div>
    </div>
    <script src="static_files/js/signup.js"></script>
</body>

</html>