<?php
// 3achan t3m check lel data elly gyalak mn el client side
    // 1- Check All Inputs
    // 2- Sanitizing
    // 3- Validation


    $errors = [];
if(isset($_POST['email'])){
   // echo $_POST['email'];
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo"<h1> $email</h1>";
   }else{
        $errors[]= "Email Format Error";
   }
} else {
    $errors[] = "email Not Found";
}

if(count($errors)> 0){
    print_r($errors);
}


?>