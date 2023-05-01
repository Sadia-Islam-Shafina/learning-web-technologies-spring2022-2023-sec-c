<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Course Details</h1>


<a href="firstsem.php">1st Semester</a><br>

<a href="secoundsem.php">2nd Semester</a><br>


<a href="thirdsem.php">3rd Semester</a><br>


<a href="fourthsem.php">4th Semester</a><br>

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