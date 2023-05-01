<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<link rel="stylesheet" type="text/css" href="../css/club.css">

<h1>Club Activities</h1>


<a href="somoyinfo.php">About Somoy Club</a><br>
<a href="joinsomoy.php">Join Somoy Club</a><br>


<br>
<br>

<a href="../views/home.php">Back</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>