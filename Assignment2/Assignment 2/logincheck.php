<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</html>



<?php

if(isset($_POST["UserName"])){
    session_start();
    include("db.php");
    $uid = $_POST["UserName"];
    $pw = $_POST["Password"];
    $qry="select name from admin where Username='$uid' and password='$pw'";

    $result=mysqli_query($con,$qry) or die(mysqli_error($con));
    $n=mysqli_num_rows($result);

    if($n>0){
        $row=mysqli_fetch_row($result);
        $name=$row[0];
        $_SESSION["name"]=$name;
        header("location:home.php");
    }
    else{
        echo "Please enter valid username and Password<br>";
        echo "<a href=login.html>Go back to Login Page...</a>";
    }

}
else{
    header("location:login.html");
}

?>