<?php include_once('home.html'); 

if(isset($_POST['email'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
    }else{
        file_put_contents('registrars.txt',$_POST['email']."\n", FILE_APPEND | LOCK_EX);    
    }       
}else{
   die();
}
?>