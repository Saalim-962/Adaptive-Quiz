
<?php
    $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "adaptive-quiz";
        $conn = mysqli_connect( $host, $user, $pass, $database);
session_start(); 
        if(!$conn)
        {
            die('Could not connect: '.mysqli_error($conn));
        }
?>
<?php
$msg= 'Welcome ' . $_SESSION['username'] . ' Good to see you !';

echo "<script type='text/javascript'>alert('$msg');</script>";

?>
<?php

$query = "SELECT * FROM easy";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));


?>
<html>
<head>
	<title>Adaptive Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body url="https://t4.ftcdn.net/jpg/04/39/13/37/360_F_439133763_FrLdhZsd5aGC23r9ATARuKJBr8ifZjIe.jpg">

	<header>
		<div class="container">
			<p> Quiz</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Adaptive Quiz</h2>
				<p>
					This is a multiple choise quiz to test your Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong> Based on Adaptive Mode</strong></li>
					<li><strong>Contains questions from both easy and hard level</strong></li>

					

				</ul>

				<a href="quiz.php?n=1&i=1&c=0" class="start">Start Now !</a> 

			</div>

	</main>



</body>
</html>
