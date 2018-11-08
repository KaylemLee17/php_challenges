<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My first PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Hello world!</p>

    <?php

    $string = "Hello again";
    echo "this is a $string";

    echo '<br>';
// maths in php
    $num1 = 1712;
    $num2 = 211;

    echo $num1 - $num2;

    echo '<br>';
// converting uppercase to lowercase
    $example = 'KAYLEM';
    echo strtolower($example);
    $example = strtolower($example);

    echo '<br>';
// finding characters in a string
    $example2 = '   where in the world is carmen sandiego   ';
    echo strpos($example2, 'carmen');
// finding info about a string
    echo '<br>';
    var_dump($example2);

    echo '<br>';
// trimming function
    echo $example2;
    trim($example2);

    echo '<br>';

// string length
    echo strlen($example2);
    
    echo '<br>';

// substrings and substring positons
    echo substr($example2, strpos($example2,'i'), strpos($example2,'d')-strpos($example2,'i')+1 );

    echo '<br>';

// string replace
    echo str_replace('where', 'who', $example2);

    ?>
    
</body>
</html>