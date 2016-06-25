<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
// GET TOTAL QUESTIONS

$query = "SELECT * FROM questions";
// get results
$results = mysqli_query($connection,$query);
$total = mysqli_num_rows($results);


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
                
                <h2> Test your PHP Knowledge </h2>
                <p> This is a multiple choice quiz to test your knowledge on PHP </p>
                <ul>
                    <li><strong>Number of Questions </strong> <?php echo $total; ?> </li>
                    <li><strong>Type: </strong> Multiple Choice </li>
                    <li><strong>Estimated time: </strong> <?php echo $total * 0.5?> minutes </li>
                    
                </ul>
                <a href = "question.php?n=1" class = "start"> Start Quiz </a>
                
            </div>
            
        </main>
        
        <footer>
            <div class = "container">
                
                Copy right &copy; PHP Quizzer
                
            </div>
            
        </footer>
        
        
    </body>
</html>