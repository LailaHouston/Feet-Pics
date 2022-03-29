<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calendar</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<?php
    $dayofweek = date("w");
    echo $dayofweek;

    switch ($dayofweek) {
        case 1:
            echo "<p>It is Monday!</p>";
            break;
        case 2:
            echo "It is Tuesday!";
            break;
        case 3:
            echo "It is Wednesday!";
            break;
        case 4:
            echo "It is Thursday!";
            break;
        case 5:
            echo "It is Friday!";
            break;
        case 6:
            echo "It is Saturday!";
            break;
        case 0:
            echo "It is Sunday!";
            break;
    }

?>





</body>

</html>