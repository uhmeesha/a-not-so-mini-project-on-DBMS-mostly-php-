<?php

$conn= mysqli_connect("localhost","root","","arena");
if(!($conn)){
    echo"Connection Not Established";
}

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["username"];?></title>
    <link rel="stylesheet" href="stylechessdummmyap.css">

</head>
<body>
    <div class="user-page">
        <h2>Welcome </h2>
        
        <h3> User: <?php echo $_SESSION["username"];?> </h3>
        <a href="logout.php"><button>logout</button></a>
    </div>
</body>
</html>
