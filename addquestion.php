 <html>

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
                    if(!empty($_POST['question']) && !empty($_POST['option1']) && !empty($_POST['option2']) && !empty($_POST['option3']) && !empty($_POST['option4']) && !empty($_POST['answer'])) {
                        $username = ($_POST['question']);
                        $option1 =($_POST['option1']);
                  	$option2 =($_POST['option2']);
			$option3 =($_POST['option3']);
			$option4 =($_POST['option4']);
			$answer =($_POST['answer']);
                        $sql = "INSERT INTO easy(question,Option_1,Option_2,Option_3,Option_4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
                        if(mysqli_query( $conn, $sql)) {
                        echo "DOne";
			
                        }
                        else {
                            echo "Could no insert record: ".mysqli_error($conn);
                        }
                    }
      
            }                       
       }
       mysqli_close($conn);
			 
?>
<head>
<title>Add-Question Page</title>
</head>
<style>
table {
  border:1 px solid black;
  width: 75%;
margin-left:400px;
margin-top:50px;
float:right;
}



body{
background:url('https://t4.ftcdn.net/jpg/04/39/13/37/360_F_439133763_FrLdhZsd5aGC23r9ATARuKJBr8ifZjIe.jpg');
background-size:cover;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #f1f1f1;
  position:fixed;
font-size:20px;
font-family:cambria;
  height: 100%;
opacity:0.8;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #060548 ;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.topnav {
  overflow: hidden;	
  background-color: transparentl;
width:100%;
float:right;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
margin-left:20px;
font-family:cambria;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #f1f1f1;
  color: black;
}
}

cont
{

width:50px;

}
input[type=textQ] {
  width: 60%;
  padding: 12px 20px;
  margin:17px 400px;
  box-sizing: border-box;
   border: 2px solid white;
  background-color: transparent;
border-radius:10%;
  color: white;
font-size:15px;
}

 input[type=textQ]:focus {
background-color:#f1f1f1;
color:black;
}

input[type=textO]:focus {
background-color: #f1f1f1;
color:black;
}

input[type=textO] {
  width: 20%;
  padding: 12px 20px;
  margin:17px 400px;
  box-sizing: border-box;
  border: none;
font-size:15px;
border-radius:10%;
  border: 2px solid white;
  background-color: transparent;
  color: white;
}

.button {
  background-color: transparent; /* Green */
  border:1 px solid black;
  color:white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.button:hover
{
 background-color: #f1f1f1; /* Green */
  border:2 px white;
color:black;
}

</style>
<body>

<div class="topnav">
  <a  href="#">About</a>

  <a class="active" href="ticketlogin.php">Home </a>
</div>

<ul>
  <li><a  href="adminhome.php">Home</a></li>
  <li><a href="adminresult">View Result</a></li>
  <li><a class="active" href="tick.php">Add Questions</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>


<form name="form" action=addquestion.php" method="POST">   

 
  <input type="textQ"  name="question" placeholder="Question">
  <input type="textO"  name="option1" placeholder="Option-1">
 <input type="textO"  name="option2" placeholder="Option-2">
 <input type="textO"  name="option3" placeholder="Option-3">
 <input type="textO"  name=option4" placeholder="Option-4">
 <input type="textO"  name="answer" placeholder="Answer">
<button type="submit" class="button"> ADD </button>

</form>
</body>