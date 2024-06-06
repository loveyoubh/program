<?php 
$dictionary = array( 
    "apple" => "round fruit", 
    "banana" => "curved fruit", 
    "carrot" => "orange root vegetable", 
    "dog" => "domesticated mammal", 
    "elephant" => "large mammal with tusks", 
    "flower" => "reproductive plant part", 
); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $searchWord = strtolower($_POST["word"]);     
         if (array_key_exists($searchWord, $dictionary)) { 
                $meaning = $dictionary[$searchWord]; 
        echo "<p>Meaning of \"$searchWord\": $meaning</p>"; 
    } else { 
        echo "<p>Word not found</p>"; 
    } 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 <body> 
    <h1>Dictionary</h1> 
    <form method="post" > 
        <label for="word">Enter a word:</label> 
        <input type="text" id="word" name="word"> 
        <button type="submit">Search</button> 
    </form> 
</body> 
</html> 
