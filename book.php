<?php
    
    // POST 
    // inputs : name time date guest message
    

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        echo "<h3>Guest Name:   {$_POST['name']} </h3>";
        echo "<h3>Number:       {$_POST['guest']} </h3>";
        echo "<h3>Date:         {$_POST['date']} </h3>";
        echo "<h3>Time:         {$_POST['time']} </h3>";
        echo "<h3>Notes:        {$_POST['message']} </h3>";
    } else{ 
        header("Location:index.php");
    }
    




?>