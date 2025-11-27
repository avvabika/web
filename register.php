<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
     
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $confirm_password = $_POST['confirm_password']; 
 
    
    if ($password != $confirm_password) { 
        echo "Passwords do not match!"; 
    } elseif (strlen($password) < 6) { 
   echo "Password must be at least 6 characters!"; 
    } else { 
        
        echo "Registration successful!<br>"; 
        echo "Name: $name<br>"; 
        echo "Email: $email<br>"; 
 
    } 
} 
?>