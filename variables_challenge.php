<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>
<?php
$name = "  Bob  ";
trim($name);
echo $name, '<br>';

$age = "thirty five";
echo str_replace('thirty five', '35', $age), '<br>';

$job = "plumber";
echo $job, '<br>';

$carMake = " Toyota";
$carMake = trim($carMake);
echo $carMake, '<br>';

$carColour = "RED";
echo $carColour = strtolower($carColour), '<br>';

$car = $carColour . $carMake;
echo $car, '<br>';

$happy = "true";
echo $happy, '<br>';

$time = "this many";
echo strlen($time), '<br>';
$timeLength = strlen($time); '<br>';

$retire = '30';
echo $retire, '<br>';

$story = "$name is a $job. He drives a $car and works $timeLength hours a day. He is $age years old and is $retire years from reitrement. He is happy with his life.";

echo $story;







?>
</body>
</html>