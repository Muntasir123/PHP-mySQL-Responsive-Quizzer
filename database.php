<?php

    $connection = mysqli_connect('localhost','root','','quizzer');

    if (!$connection)
    {
        echo "Can't connect".mysqli_error($connection);
    }
?>