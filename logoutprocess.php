<?php session_start();
if (empty($_SESSION['id'])):
    header('Location:signup.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<body>

    <div style="width: 150px; margin: auto; height: 500px; margin-top:300px;">

        <?php
        include('dbconnect.php');
        session_destroy();

        echo '<meta http-equiv="refresh" content="2;url=signup.php">';
        echo '<progress max=100><strong>Progress: 30% done.</strong></progress> <br>';
        echo '<span class="itext" style = "color: purple; font-size: 20px">signing out</span>';
        ?>
    </div>
</body>

</html>