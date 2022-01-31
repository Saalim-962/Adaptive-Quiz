<html>
<?php
include 'db.php';
session_start();
$conn = $con3;
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
        if(isset($_POST["submit"]))
        {
                 if(!empty($_POST['username']) && !empty($_POST['password']))
                  {
                     $username = ($_POST['username']);
                     $password = ($_POST['password']);

                     $sql = "INSERT INTO userinfo(username,password) VALUES ('$username','$password')";
                     if(mysqli_query( $conn, $sql))
                      {
                        $_SESSION['username'] = $username;
                        $username = $_SESSION['username'];
                        header("location: start.php? username=".$_SESSION['username']);
                      }
                     }
        }
}

?>
<!---form in html--->
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div class="loginbox">
            <h1> Login here </h1>
            <form name="form" action="#" method="POST">
             <p>username</p>
             <input type="text" name="username" placeholder="Enter Username">
             <p>password</p>
             <input type="password" name="password" placeholder="Enter Password">
             <input type="submit" name="submit" value="Login">
            </form>
</div>
</body>
</head>
</html>
