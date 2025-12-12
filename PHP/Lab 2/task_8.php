
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) { 
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 3; $j < 4 + $i; $j++) { 
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}

?>
</body>
</html>