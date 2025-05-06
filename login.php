<!-- registeration -->
<?php

session_start();

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    // $email =$_POST['email'];
    // $city = $_POST['city'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'arena';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    // $select1= "SELECT * FROM 'players' where username='$username' AND password='$password'";
    // $query= "SELECT * FROM 'players' where username='$username' AND password='$password'";
    $query = "SELECT * FROM players WHERE username='$username' AND password='$password'";


    $result=mysqli_query($conn,$query);

    // $select_user= mysqli_query($conn,$query);
    // echo $result["username"];
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result); 
        // $myrow=mysqli_fetch_array($row1);
       
        // if($row1['username']=='username'){
        echo $row["username"];
            $_SESSION["username"]=$row["username"];
            $_SESSION["sno"]=$row["sno"];
            // echo $_SESSION["username"];
            header('location:user.php');
        
        }
        elseif($username=="" && $password=="")
            echo "enter credentials";
        else{
            $msg="incorrect credentials";
            echo $msg;
                }
    //     elseif($row1['user_type']=='user'){
    //         $_SESSION['user']=$row1['email'];
    //         $_SESSION['id']=$row1['id'];
    //         header('location:user.php')
    // }
    

    
    }
        
    
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="stylechessdummmyap.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessDummy</title>
</head>

<body>

    <!-- <div id="main"> -->

    
    <div class="Text">

        <h1>Are you a Chess Dummy ?</h1>
        <h5>[a dummy chess to lure you into stealing your information]</h5>
        <p> hey look ! another page</p>
    </div>


    <div class="container">

        <div class="chessboard">
            <div class="a">&#9820;</div>
            <div class="b">&#9822;</div>
            <div class="a">&#9821;</div>
            <div class="b">&#9818;</div>
            <div class="a">&#9819;</div>
            <div class="b">&#9821;</div>
            <div class="a">&#9822</div>
            <div class="b">&#9820</div>
    
            <div class="b"></div>
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
    
            <div class="b">&#9823</div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
            <div class="b"></div>
            <div class="a"></div>
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
            <div class="a">&#9816;</div>
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
            <div class="b"></div>
            <div class="a">&#9814;</div>
    
    
    
        </div>
    
        <div class="form">
            <form action="#" method="POST">

            <!-- <input type="text" name="username" placeholder="Enter your name">
            <input type="text" name="password" placeholder="Password">
            
            <input type="submit" name="submit" value="Send data">-->

                <table>
                    <tr>
                        <td>UserName: </td>
                        <td><input type="text" name="username"></td>
                    </tr><br>
                    <tr>
                        <td>Password: </td>
                        <td> <input type="text" name="password"> </td>
                    </tr> <br>
                    <!-- <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email"></td>
                    </tr> <br>
                    <tr>
                        <td>City:</td>
                        <td> <input type="text" name="city"></td>
                    </tr> <br> -->
                </table>
                <input type="submit" name="submit" value="Log in"></input>
                <h4> Don't Have an account? <a href="player.php">Register In</a></h4>
            </form>
        </div>
    </div>

    <!-- </div> -->

</body>

</html>