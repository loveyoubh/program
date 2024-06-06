<?php 
session_start(); if(isset($_SESSION['username'])) { 
    header("Location: welcome.php");     
    exit; 
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $uname = "prakash"; 
    $pwd = "password"; 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
        if ($username === $uname && $password === $pwd) { 
         
        $_SESSION["username"] = $uname; 
        $_SESSION["password"] = $pwd;        
        header("Location: welcome.php");         exit;     } else { 
              echo "<p>Invalid username or password!</p>"; 
    } 
} 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Login</title> 
</head> 
<body> 
    <h2>Login</h2> 
    <form method="post"> 
        <label for="username">Username:</label> 
        <input type="text" name="username" required><br><br> 
        <label for="password">Password:</label> 
        <input type="password" name="password" required><br><br> 
        <input type="submit" value="Login"> 
    </form> 
</body> 
</html> 
