<html>
<?php 

//connecting to database
$connect=mysqli_connect("localhost","root","","demo") or die("connection failed");
//applying logic

?>
<!---form in html--->
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div class="loginbox">
            <h1> Login here </h1>
            <form action='#' method = 'post'>
             <p>Username</p>
             <input type="text" name= "uname" placeholder="enter username">
             <p>Password</p>
             <input type="password" name= "pwd" placeholder="enter password">
             <br>
             <center>
             <input type="submit" name="save" value="Login">
            </center> 
            </form>
</div>
</body>
</head>
</html>