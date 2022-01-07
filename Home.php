<?php
    $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "adaptive-quiz";
        $conn = mysqli_connect( $host, $user, $pass, $database);
        if(!$conn)
        {
            die('Could not connect: '.mysqli_error($conn));
        }
?>

<?php
   session_start();
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           if(isset($_POST["submit"]))
{
                    if(!empty($_POST['username']) && !empty($_POST['email'])) {
                        $username = ($_POST['username']);
                        $email = ($_POST['email']);
                  
                        $sql = "INSERT INTO user(Username,email) VALUES ('$username','$email')";
                        if(mysqli_query( $conn, $sql)) {
                        
				 $_SESSION['username'] = $username;
				header("location: start.php");
                        }
                        else {
                            echo "Could no insert record: ".mysqli_error($conn);
                        }
                    }
      
            }                       
       }
       mysqli_close($conn);
			 
?>

<html>
	<head>
		<title>Adaptive-Quiz</title>
		
	</head>
<style>

body {
	font-family: arial;
	font-size: 15px;
	background-color:black;
	background-size: cover;	
	
}

li{
	list-style: none;
}

a{
	text-decoration: none;
}

label{
	display: inline-block;
	width: 180px;
}

input[type='text']{
	width:30	%;
	padding: 4px;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
}

input[type='number']{
	width: 50px;
	padding: 4px;
	border-radius: 5px;
	border:1px #ccc solid;
}

input[type='email']
{
border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: black;
	width:50%;
	font-family: 'Exo', sans-serif;
height: 30PX;
}
input[type='submit']
{
width:100px;
	height: 30px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 150px;
	padding: 6px;
	margin-top: 10px;
	margin-left:20px;
}
.container{
	width: 60%;
	margin: 0 auto;
	overflow: auto;
	
}

header{
	//border-bottom: 3px #272726 solid;
	//background: #3A3A36;
	color: white;
}

a.add {
	display: inline-block;
	color: #666;
	background: #f4f4f4;
	border-left: 7px #272726 solid;
	padding:6px 13px;
	position: right;
}

footer{
	//border-top: 3px #272726 solid;
	//background: #3A3A36;
	color: #BBBBB9;
	text-align: center;
	padding-top: 5px;
	padding-bottom: 5px;
}

main{
	padding-bottom: 20px;
	//background: #61615E;
	color: white;
}

a:hover{
color:black;
background:orange;
}
a {
	display: inline-block;
	color: white;
	border-radius:10%;
	background: red;
	border:1 px solid black;
	margin:5px;
	font-size:15px;
	font-family: 'Exo', sans-serif;
	padding:6px 13px;
}

.current{
	padding:10px;
	background: #8D8D8B;
	border-left: 10px #272726 solid;
	margin: 20px 0 10px 0;
}

@media only screen and (max-width: 960px){
	.container{
		width: 60%;
	}
}

</style>

	<body>
		<header>
			<div class="container">
				<h1>Quiz</h1>
				<a href="index.php">Home</a>
				<a href="admin.php">Admin Panel</a>

			</div>
		</header>

		<main>
		<div class="container">
				<h2>Enter Your Email</h2>
				<form name="form" action="home.php" method="POST">   

				<input type="text" name="username" placeholder="Username">
				<br>
				


				<input type="email" name="email" required="" placeholder="E-mail">
				<input type="submit" name="submit" value="PLAY NOW">
	
			</div>
	</form>

		</main>


	</body>
</html>
