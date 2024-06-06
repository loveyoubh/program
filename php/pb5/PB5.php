<?php 
$host = "localhost";  
$username = "root"; 
$password = "";  
$database = "BCA";   
$conn = new mysqli($host, $username, $password, $database); 
 if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $subject = $_POST["subject"]; 
    $message = $_POST["message"];  
    $sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', 
'$email', '$subject', '$message')";     if ($conn->query($sql) === TRUE) {     
        echo "Feedback submitted successfully!"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } } 
$conn->close(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
     <title>Feedback Form</title> 
</head> 
<body> 
<h2>Feedback Form</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); 
?>"> 
        <label for="name">Name:</label><br> 
        <input type="text" id="name" name="name" required><br> 
        <label for="email">Email:</label><br> 
        <input type="email" id="email" name="email" required><br> 
        <label for="subject">Subject:</label><br> 
        <input type="text" id="subject" name="subject" required><br> 
        <label for="message">Message:</label><br> 
        <textarea id="message" name="message" rows="4" required></textarea><br><br>       
          <input type="submit" value="Submit"> 
    </form> 
</body> 
</html> 
 
