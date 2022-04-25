<?php session_start();
if (empty($_SESSION['id'])) :
    header('Location:index.html');
endif;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static_files/css/homepage.css">
    
  
    <title><?php echo $_SESSION['firstname']; ?>'s account</title>
</head>
<style>
    img {
        height: 30px;
        width: 30px;
    }
</style>


<body>
   
    <!-- salute end  -->
     
     <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"> <a href = "">CYPRS </a> </label>
      <ul>
        <li>           
      <div class="dropdown">
                    <button class="dropbtn">   <img src="static_files/img/user.png" alt="profile">
                          <ul class ="dropdown-content">
                      
                         <li>FIRSTNAME: <br><?php echo $_SESSION['firstname']; ?></li><br>
                         <li>SECONDNAME:<br><?php echo $_SESSION['secondname']; ?> </li><br>
                         <li> GENDER:<br> <?php echo $_SESSION['gender']; ?> </li> <br>
                         <li>COUNTRY:<br><?php echo $_SESSION['country']; ?></li><br>
                        <li>COUNTY:<br><?php echo $_SESSION['county']; ?></li><br>
                        <li> EMAIL:<br><?php echo $_SESSION['email']; ?></li>
                    </ul>
                    </button>
                  
                </div>
            </a>
            </li>  
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      <li> <a href="#"><a href="logoutprocess.php" class="active"> <button > log out</button></a></li>
          
      </ul>
    </nav>


            <h1>
                Hello <?php echo $_SESSION['firstname']; ?>!
            </h1>
            <h2>
                Welcome into your <span style="color: red;"></span> Account.
            </h2>
            <h2>
                <h3> Hello <?php echo $_SESSION['firstname']; ?> </h3>
             
            </h2>
 

</body>


</html>
