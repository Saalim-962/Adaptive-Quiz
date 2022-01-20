<?php
include 'db.php';
session_start(); ?>
<?php
    if(!isset($_SESSION['score']))
    {
        $_SESSION['score'] = 0;
    }
   
    if($_POST)
    {
        $number = $_POST['number'];
        $i = $_POST['i'];
        $counter = $_POST['c'];
        if($i == 1)
        {
            $conn = $con1;
        }
        elseif($i == 2)
        {
            $conn = $con2;
        }
        $next_db = $i;
        $selected_choice = $_POST['choice'];
    
        $next = $number+1;
        $query1 = "select*from questions";
        $total_questions  =mysqli_num_rows(mysqli_query($conn,$query1));

        $query = "select * from answers where ans_id = $number and a_bit = 1 ";
        $result= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);

        $correct_choice = $row['ansid'];

        if($selected_choice == $correct_choice)
        {            
            $counter++;
            $_SESSION['score']++;
            if ($counter >= 3)
            {
                $counter = 3;
            }
            elseif($counter < 3)
            {
                $counter = $counter;
            }

            if($counter >= 2)
            {
                if($counter> 1 && $next_db !=2)
                {
                    $next_db=2;
                    $counter = 0;
                }
                elseif($counter> 1 && $next_db == 2)
                {
                    $next_db = 2;
                }
            }
            
        }

        elseif($selected_choice != $correct_choice)
        {
            $counter--;
            if($counter <= -2)
            {
                $counter = -2;
            }
            else
            {
                $counter = $counter;
            }
            if($counter < 0)
            {
                if($counter< 0 && $next_db != 1)
                {
                    $next_db = 1;
                    $counter = 0;
                }
                elseif($counter< 0 && $next_db == 1)
                {
                    $next_db = 1;
                }
            }   
        }
        if($number == $total_questions)
        {
            header("LOCATION:score.php");
        }
        else{
            header("LOCATION: quiz.php? n=".$next."&i=".$next_db."&c=".$counter);
        }
    }
    

 ?>


