<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</html>




<?php

session_start();
if(isset($_SESSION["name"])){
$name=$_SESSION["name"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello Admin - <?php echo $name ?></h1>
    <a href="show-books">Show Books</a><br>
    <a href="add-book.php">Add a Book</a><br>
    <a href="update-book.php">Update Existing Book</a><br>
    <a href="delete-book">Delete Existing Book</a><br><br>
    <a href="upload.php">Uploadimage</a><br><br>


    <a href="logout.php">Logout...</a>
</body>
</html>
<?php

}
else{
    header("location:index.php");
}

?>