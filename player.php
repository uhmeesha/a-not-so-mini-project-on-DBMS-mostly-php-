<!-- registeration -->
<?php
if(isset($_POST['submit'])){
    if(($username="") ||( $email="") || ( $password=""))
        echo "enter  all credentials";
    else{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $email =$_POST['email'];
    $city = $_POST['city'];


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'arena';

    $conn = mysqli_connect($host,$user,$pass,$dbname);


    // $select1="SELECT * FROM players WHERE username = '$username' AND password = '$password'";
    $select1="SELECT * FROM players WHERE username = '$username' AND email = '$email'";

    $select_user = mysqli_query($conn, $select1);
    if(mysqli_num_rows($select_user) > 0){
        $msg = "User Exists";
        echo $msg;
        $row=mysqli_fetch_assoc($select_user); 
        echo $username;
        echo $row["username"];
    }
    
    else{
        $insert1="INSERT INTO players(username, password, email, city ) values ('$username', '$password', '$email', '$city')";
        mysqli_query($conn, $insert1);
        header('location:login.php');

    }

    // $conn = mysqli_connect($host,$user,$pass,$dbname);

    // $sql = "INSERT INTO players(username, password, email, city ) values ('$username', '$password', '$email', '$city')";
    // mysqli_query($conn, $sql);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessDummy</title>
    <link rel="stylesheet" href="stylechessdummmyap.css">
</head>

<body>

    <!-- <div id="main"> -->

    
    <div class="Text">

        <h1>Are you a Chess Dummy ?</h1>
        <h5>[a dummy chess to lure you into stealing your information]</h5>
        <p> more like a dummmy [me] making this and doesn't know much, so just let it look like its on purpose</p>
        <p>its the same color as the bg but you can still see it</p>
    </div>


    <div class="container">

        <div class="chessboard">
            <div class="a">&#9820;</div>
            <div class="b">&#9822;</div>
            <div class="a">&#9821;</div>
            <div class="b">&#9818;</div>
            <div class="a"></div>
            <div class="b">&#9821;</div>
            <div class="a">&#9822</div>
            <div class="b">&#9820</div>
    
            <div class="b">&#9823;</div>
            <div class="a">&#9823</div>
            <div class="b">&#9823</div>
            <div class="a">&#9823</div>
            <div class="b">&#9823</div>
            <div class="a">&#9823</div>
            <div class="b">&#9823</div>
            <div class="a">&#9823</div>
    
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
    
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a">&#9819;</div>
            <div class="b"></div>
            <div class="a"></div>
    
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
    
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
    
            <div class="a">&#9817</div>
            <div class="b">&#9817</div>
            <div class="a">&#9817</div>
            <div class="b">&#9817</div>
            <div class="a">&#9817</div>
            <div class="b">&#9817</div>
            <div class="a">&#9817</div>
            <div class="b">&#9817</div>
    
            <div class="b">&#9814;</div>
            <div class="a">&#9816;</div>
            <div class="b">&#9815;</div>
            <div class="a">&#9812;</div>
            <div class="b">&#9813;</div>
            <div class="a">&#9815;</div>
            <div class="b">&#9816;</div>
            <div class="a">&#9814;</div>
    
    
    
        </div>
    
        <div class="form">
            <form action="#" method="POST">

            <!-- <input type="text" name="username" placeholder="Enter your name">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="Your email">
            <input type="text" name="city" placeholder="Your city">
            <input type="submit" name="submit" value="Send data"> -->


                <table>
                    <tr>
                        <td>UserName: </td>
                        <td><input type="text" name="username"></td>
                    </tr><br>
                    <tr>
                        <td>Password: </td>
                        <td> <input type="text" name="password"> </td>
                    </tr> <br>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email"></td>
                    </tr> <br>
                    <tr>
                        <td>City:</td>
                        <td> <input type="text" name="city"></td>
                    </tr> <br>
                </table>
                <input type="submit" name="submit" value="Register">
                <h4> Have an account? <a href="login.php">Log In</a></h4>
            </form>
            
        </div>
    <!-- </div> -->

    </div>
    <p>yes, you can see your password. so can the admin</p>


</body>

</html>