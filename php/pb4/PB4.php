<?php 
$host = "localhost";  
$username = "root"; 
$password = "";  
$database = "BCA"; 
$conn = new mysqli($host, $username, $password, $database); 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 function login($username, $password, $conn) { 
    $sql = "SELECT * FROM login WHERE uname = '$username' AND passwd = 
'$password'"; 
    $result = $conn->query($sql); 
    if ($result->num_rows == 1) {       
          echo "Login successful!"; 
    } else { 
        echo "Invalid username or password"; 
    } 
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    login($username, $password, $conn); 
} 
$conn->close(); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
 	<meta charset="UTF-8"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Login Form</title> 
</head> 
<body> 
    <h2>Login</h2> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
        <label for="username">Username:</label><br> 
        <input type="text" id="username" name="username" required><br> 
        <label for="password">Password:</label><br> 
        <input type="password" id="password" name="password" required><br><br>      
           <input type="submit" value="Login"> 
    </form> 
</body></html> 
 
