
<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

    // Set question number
$number = (int) $_GET['n'];


$query = "SELECT * FROM questions";
        
        // get result
$results = mysqli_query($connection,$query);
$total = mysqli_num_rows($results);


////

    $query = "SELECT * FROM questions";
    $query.= " WHERE question_number = $number";
    $result = mysqli_query($connection,$query);
    $question = mysqli_fetch_assoc($result);
        



    // get Choices

    $query = "SELECT * FROM choices";
    $query.= " WHERE question_number = $number";
    $choices = mysqli_query($connection,$query);
    
    

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>PHP Quizzer</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    
    
    <body>
        <header>
            <div class = "container">
            
                <h1> PHP Quizzer </h1>
                
                
            </div>
        </header>
        
        <main>
            
            <div class = "container">
                <div class = "current"> Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </div>
                <p class = "question">
                       <?php echo $question['text']; ?>
                </p>
                
                <form method = "post" action = "process.php">
                    <ul class = "choices">
                        <?php
                        while($row = mysqli_fetch_assoc($choices)): ?>
                       <li><input name = "choice" type = "radio" value = "<?php echo $row['id']; ?>" /> <?php  echo $row['text']; ?></li>
                        <?php  endwhile  ?>
                       
                       
                       
                        
                        
                    </ul>
                    
                    <input type = "submit" name ="submit" value = "submit">
                    <input type = "hidden" name = "number" value = "<?php echo $number; ?>">
                </form>
                
                
                
            </div>
            
        </main>
        
        <footer>
            <div class = "container">
                
                Copy right &copy; PHP Quizzer
                
            </div>
            
        </footer>
        
        
    </body>
</html>