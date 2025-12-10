<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

<?php

$num1 = 39;
$num2 = 50;
$num3 = 80;
if ($num1> $num2 && $num1>$num3) {
  echo "Number1 is bigger";
} else {
    if($num2>$num1 && $num2>$num3) {
        echo "Number2 is bigger";
    }
    else{
        echo "Number 3 is bigger";
    }
}

?>
    
</body>
</html>