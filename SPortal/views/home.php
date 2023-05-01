<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>


<link rel="stylesheet" type="text/css" href="../css/home.css">
<h1>Welcome home! <?=$_SESSION['username']?></h1>

<a href="club.php">Club Activities</a><br>
<a href="game.php">Games</a><br>
<a href="coursedetails.php">Coursedetails</a><br>
<a href="academic_calender.php">Academiccalender</a><br>
<a href="admission.php">Admission</a><br>
<br>
<br>

<a href="../controllers/logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>