<?php include 'database.php'; ?>


<?php session_start(); ?>


<?php

// check to see if score is set
    if (isset($_POST['submit']))
    {
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number + 1;
        
        // get total questions
        
        
        $query = "SELECT * FROM questions";
        
        
        // get result
        
        $results = mysqli_query($connection,$query);
        $total = mysqli_num_rows($results);
        
        // query to get right answer
        
        
        $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";
        $result = mysqli_query($connection,$query);
        
        
        $row = mysqli_fetch_assoc($result);
       
        
        // Adding questions
        
        $question_num = $_POST['question_number'];
        
        
        
        
        // set correct choice
        
        $correct_choice = $row['id'];
        // Compare
        
        if($correct_choice == $selected_choice)
        {
            // answer is correct
            $_SESSION['score']++;
            
        }
    
        
        // check is last question
        if($number == $total)
        {
            header("Location:final.php");
            exit();
        } else
        {
            header("Location:question.php?n=$next");
        }
    }




