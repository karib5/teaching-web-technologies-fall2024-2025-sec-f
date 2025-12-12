<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br><br>";



for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br><br>";


$letters = [
    ["A"],
    ["B", "C"],
    ["D", "E", "F"]
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < count($letters[$i]); $j++) {
        echo $letters[$i][$j] . " ";
    }
    echo "<br>";
}

?>

</body>
</html>
