<?php
include 'db.php';
session_start();

$number = $_GET['n'];
$i = $_GET['i'];
$counter = $_GET['c'];
if($i ==1)
{
    $conn = $con1;

}
elseif($i == 2)
{
    $conn = $con2;
}

$query = "select*from questions where qid = $number";
$q = mysqli_query($conn,$query);
$mcq= mysqli_fetch_assoc($q);

$query = "select * from answers where ans_id= $number";
$options = mysqli_query($conn,$query);

$query = "select*from questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style_quiz.css">
</head>
<body>
    <div class="current">
        <center>
        <h1>Question Number <?php echo $number; ?> of <?php echo $total_questions; ?></h1>
        <hr>
        <br>
        </center>
    
    
    <div class="col-lg-8 m-auto d-block">
    
    <div class="question">
        <h2>
                  
    <?php 
        echo $mcq['question'];
    ?>
   
    </h2>
    </div>
    <div class="options">
    <form action="process.php" method="post">
        <ul>
        <?php while($row = mysqli_fetch_assoc($options)) { ?>
            <h3>
            <li>
                <input type="radio" name="choice" value="<?php echo $row['ansid'];?>"><?php echo $row['answer'];?>
            </li>
            </h3>
        <?php  }
        ?>
        </ul>
    <input type="hidden" name="i" value="<?php echo $i; ?>">
    <input type="hidden" name="c" value="<?php echo $counter; ?>">
    <input type="hidden" name="number" value="<?php echo $number; ?>">
    </div>
    <center>
    <div >
        <h4>
    <input type="submit" class="btn" name="submit" value="Submit">
    </h4>
    </div>
    </center>
    </div>
</form>
</div>
</body>
</html>


