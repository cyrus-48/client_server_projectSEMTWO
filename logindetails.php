<?php session_start();

include('dbconnect.php');


if (isset($_POST['login'])) 
{
$user_unsafe=$_POST['email'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass =mysqli_real_escape_string($con,$pass_unsafe);



$query=mysqli_query($con,"select * from createaccount where email='$user' and password = '$pass'");
}  

$row = mysqli_fetch_array($query);
$email = $row['email'];
$fname=$row['firstname'];
$sname=$row['secondname'];
$gender=$row['gender'];
$country=$row['country'];
$county=$row['county'];

$counter = mysqli_num_rows($query);
$id = $row['id'];

if($counter==0)
{
    echo" <script type='text/javascript'>
    alert('Incorrect username or passwrod! ');
    document.location = 'login.php'
    </script>";
}
else
{
    $_SESSION['id']=$id;
    $_SESSION['email']=$email;
    $_SESSION['firstname']=$fname;
    $_SESSION['secondname']=$sname;
    $_SESSION['gender']=$gender;
    $_SESSION['country']=$country;
    $_SESSION['county']=$county;
    header("Location: products.php");
    echo "<script type='text/javascript'>
    document.location='products.php'</script>";

}

?>