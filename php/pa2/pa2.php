<!DOCTYPE html> 
<html> 
<head> 
    <title>Armstrong Number Checker</title> 
</head> 
<body> 
    <h2>Armstrong Number Checker</h2> 
    <form method="post"> 
        Enter a number: <input type="text" name="number"> 
        <input type="submit" value="Check"> 
    </form> 
    <?php 
       function isArmstrong($number) { 
        $sum = 0; 
        $temp = $number; 
        $digits = strlen($number); 
         
        while ($temp != 0) {             $remainder = $temp % 10; 
            $sum += $remainder ** $digits; 
            $temp = (int)($temp / 10); 
        } 
         
        if ($sum == $number) {             return true;         } else {             return false; 
        } 
    } 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $inputNumber = $_POST["number"];           if (is_numeric($inputNumber)) {         
                if (isArmstrong($inputNumber)) { 
                echo "<p>$inputNumber is an Armstrong number.</p>"; 
            } else { 
                echo "<p>$inputNumber is not an Armstrong number.</p>"; 
            } 
        } else { 
            echo "<p>Please enter a valid number.</p>"; 
        } 
    } 
    ?> 
</body> 
</html> 
 
