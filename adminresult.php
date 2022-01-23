<?php
session_start();
?><?php
$link = mysqli_connect("localhost", "root", "", "adaptive-quiz");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

 <html>
<head>
<title>Admin Page</title>
</head>
<style>


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

input
{
font-size:25px;
border-radius:10%;	
font-family:cambria;
margin-left:500px;
margin-right:18px;
color:white;
background-color:brown;
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
  background-color: transparent;
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

table {
  border:1 px solid black;
  width: 70%;
align:center;
font-family:Cambria;
margin-left:400px;
margin-top:40px;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
font-size:15px;
  text-align: center;
  background-color: brown;
  color: white;
}
td {
  text-align: center;
  padding: 8px;
}
tr:hover {background-color: #ddd;}

tr:nth-child(even) {background-color: #f2f2f2;}
}

</style>

<body>

<div class="topnav">
  <a  href="#">About</a>

  <a class="active" href="ticketlogin.php">Home </a>
</div>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a class="active" href="">View Result</a></li>
  <li><a href="addquestion.php">Add Questions</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<form action="adminresult.php" method="POST">
<input type="submit" class=" w3-hover-green w3-btn w3-white w3-border" value="View Result" name="submit"></div>
</form>
</body>
<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 if(isset($_POST["submit"]))
    
{

$sql = "SELECT * FROM register";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
	 echo "<th>Username</th>";
                echo "<th>Password</th>";
                echo "<th>Email</th>";
         

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
       
            echo "</tr>";
        }
        echo "</table>";
       
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} }

mysqli_close($link);
?>
</html>