<!DOCTYPE html> 
<html> 
<head> 
    <title>Simple PHP Calculator</title> 
</head> 
<body> 
<h2>Simple PHP Calculator</h2> 
<form method="post"> 
    <input type="text" name="n1" placeholder="Enter First number"> 
    <select name="op"> 
        <option value="+">+</option> 
        <option value="-">-</option> 
        <option value="*">*</option> 
        <option value="/">/</option> 
    </select> 
     <input type="text" name="n2" placeholder="Enter Second number"> 
    <input type="submit" name="submit" value="Calculate"> 
</form> 
 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $n1 = $_POST['n1']; 
    $n2 = $_POST['n2']; 
    $op = $_POST['op']; 
         if (!is_numeric($n1) || !is_numeric($n2)) {        
             echo "Please enter valid numeric operands."; 
    } else { 
                switch ($op) {            
                     case '+': 
                $result = $n1 + $n2; 
                echo "Result: $n1 $op $n2 = $result";                
                 break;             case '-': 
                $result = $n1 - $n2; 
                echo "Result: $n1 $op $n2 = $result";               
                  break;             case '*': 
                $result = $n1 * $n2; 
                echo "Result: $n1 $op $n2 = $result";               
                  break;             case '/': 
                       
                        if ($n2 == 0) { 
                    echo "Cannot divide by zero.";                 } else { 
                    $result = $n1/ $n2; 
                    echo "Result: $n1 $op $n2 = $result"; 
                }                 break;             default: 
                echo "Invalid operator selected."; 
        } 
    } 
} 
?> 
</body> 
</html> 
