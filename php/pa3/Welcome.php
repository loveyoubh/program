<?php 
session_start(); 

$username = $_SESSION['username']; 
 if(isset($_POST['logout'])) {    
        session_unset();    
            session_destroy();    
    header("Location: index.php"); 
    exit; 
} 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Welcome</title> 
</head> 
<body> 
    <h2>Welcome, <?php echo $username; ?>!</h2> 
    <p>This is a protected page. Only logged in users can access this.</p> 
    <form method="post"> 
        <input type="submit" name="logout" value="Logout"> 
    </form> 
</body> 
</html> 
