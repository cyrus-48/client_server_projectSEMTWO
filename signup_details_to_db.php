<?php
$servername ="localhost";
$user="root";
$password="";
$dbname="details";

$con = mysqli_connect($servername,$user,$password,$dbname);
if(!$con)
{
die("connection failed:" . mysqli_connect_error());
}

if(isset($_POST['signup']))
{
$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$email=$_POST['email'];
$country=$_POST['country'];
$county=$_POST['county'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
if($password != $confirmpassword){
    echo "<script>
    alert('password do n6t match'); 
    </script>";

}
else{
$query = "INSERT INTO createaccount(firstname,secondname,email,country,county,gender,password,confirmpassword)
VALUES('$firstname','$secondname','$email','$country','$county','$gender','$password','$confirmpassword')";

if(mysqli_query($con,$query))
{
    echo "<script type='text/javascript'>
    alert('Your account has been create ');
    document.location= 'login.php'
    </script>";
}
else{
    echo "Error while creating account:  " . "" . mysqli_error($con);
    echo "<script type='text/javascript'>
    alert('Choose username or email that is unique and not used by anyone');
    document.location= 'signup.php'
    </script>";
    
}
}
mysqli_close($con);

}

?>