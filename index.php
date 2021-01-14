<?php
$array1 = [];
$array2 = [];
$array3 = [];
$array4 = [];
$array5 = [];
$array6 = [];

for ($i = 3; $i < 34; $i++) {
    array_push($array1, $i);
}

for ($i = 5; $i <= 100; $i += 5) {
    array_push($array2, $i);
}

for ($i = 10; $i >= -10; $i -= 1) {
    array_push($array3, $i);
}

for ($i = 2; $i <= 40; $i += 2) {
    array_push($array4, $i);
}

for ($i = 512; $i >= 0.25; $i /= 2) {
    array_push($array5, $i);
}

for ($i = 0; $sum < 55; $i++) {
    $sum = $sum + $i;

    array_push($array6, $sum);
}



function random_color_part()
{
    return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
}

function random_color()
{
    return random_color_part() . random_color_part() . random_color_part();
}

function get_space ($param) {
    for($i =$param; $i> 0; $i--) {
        echo "*" ;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css?v=<?php echo time(); ?>">
    <title>Zadanie arrays</title>
</head>

<body>

    <p>$array 1:</p>
    <?php foreach ($array1 as $el) {
        echo $el . "</br>";
    }; ?>
    <p>$array 2:</p>
    <?php foreach ($array2 as $el) {
        echo $el . " | ";
    }; ?>
    <p>$array 3:</p>
    <?php foreach ($array3 as $el) {
        if ($el % 2 === 0) {
            echo '<span style="color:green">' . $el . '</span>' . ' ';
        } else {
            echo $el . " ";
        };
    }; ?>
    <p>$array 4:</p>
    <?php foreach ($array4 as $el) {
        if ($el % 5 == 0) {
            echo $el . "</br>";
        } else {
            echo $el . " ";
        }
        
    }; ?>
    <p>$array 5:</p>
    <p><?php foreach ($array5 as $el) {
        echo '<span style="color:#' . random_color() . '">' . $el . "</span> ";
    }; ?></p>
    <p>$array 6:</p>
    <?php foreach ($array6 as $el) {
        echo $el . get_space($el);
    }; ?>
</body>

</html>