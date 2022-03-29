<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Switch</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<?php
   
    $food = "Corn";

    switch ($food) {
        case "Corn":
            echo "Corn is okay. It just needs butter."; 
            break;
        case "Ice Cream":
            echo "Ice cream is a good choice!"; 
            break;
        case "Rice":
            echo "What excactly are you eating with the rice?( ͡° ͜ʖ ͡°) "; 
            break;
        case "Pizza":
            echo "Pizza is good but pineapple pizza is better than any other pizza."; 
            break;   
            default:
                echo "You have to pick a food!";
    }







?>


</body>

</html>