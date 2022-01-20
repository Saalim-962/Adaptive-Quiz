<?php
include 'db.php';
session_start();
$conn = $con1;
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));

?>


<html>
    <head>
    <link rel="stylesheet"  type="text/css" href="css/style_score.css">
    </head>
    <body>
        <div class="container">
                <table class="table-property" >
                  <thead>
                    <tr>
                        <th colspan="6" align="center">Result</th>
                    </tr>
                    </thead>
                    <tbody class="t-1">
                    <tr>
                        <th colspan="3"  align="left" valign="center"> Questions</th>
                        <th align="right-25"><?php echo $total_questions;?></th>
                    </tr>
                  </tbody>
                  <tbody class="t-2">
                    <tr>
                        <th colspan="3"  align="left" valign="center">Right Answers </th>
                        <th align="right-25"><?php echo $_SESSION['score'];?></th>
                    </tr>
                    </tbody>
                    <tbody class="t-3">
                    <tr>
                        <th  colspan="3"  align="left" valign="center">Wrong Answers </th>
                        <th align="right-25"><?php echo ($total_questions - $_SESSION['score']);?></th>
                    </tr>
                    </tbody>
                    <tbody class="t-4">
                    <tr>
                        <th colspan="3" align="left" valign="center">Score </th>
                        <th align="right-25"><?php echo $_SESSION['score'];?></th>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</html>
