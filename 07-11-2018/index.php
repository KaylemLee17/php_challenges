<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>arrays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

    $example_array = array('Toyota', 'BMW', 'Ferrari', 'Lamborghini');

    echo $example_array[1];
    var_dump($example_array);
    $example_array[5] = 'Mercedes Benz';
    var_dump($example_array);

    // foreach ($example_array as $car => $) {
    //     echo '<p>$car</p>';
    // }

    //assertive arrays
    $kaylem = array('age' => 22, 'hair' => 'black', 'height' => 1.8);

    echo $kaylem['age'];
    var_dump($kaylem);

    //multi-dimentional arrays
    $array2 = array(array(2, 3, 4, 5),array('Jaguar', 'Ford', 'Volkswagen'));
    var_dump($array2);
    echo $array2[1][0];

    echo '<br>';

// sorting arrays alphabetically
    
    $array3 = array('jessie', 'marlon', 'urick', 'kaylem', 'tyrone', 'x', 'jp', 'taufeeq', 'josh', 'taariq', 'evan', 'gcobisa', 'micheal', 'regan', 'gedeon', 'natheer');

    sort($array3);

    $array_to_string = implode(' ', $array3);

    $back_to_the_arrays = explode(' ', $array_to_string);

    $array3[7] = 'new person';
    // counting items in the array
    
    echo count($array3);

    var_dump($array3);

    // end

    rsort($array3);
    echo end($array3);
    echo key($array3). '<br>';

    // search
    // echo array_search($array3);

    // adding to an array
    array_push($array3, 'Natheer'). '<br>';
    echo end($array3). '<br>';
    echo key($array3). '<br>';

    var_dump($array3);

    // unshift($array3, 'evan'). '<br>';
    echo end($array3). '<br>';
    echo key($array3). '<br>';

    
    

    //substring for array
    var_dump(array_slice($array3, 2));
    var_dump(array_slice($array3, -2));

    var_dump(array_splice($array3, 3));

    ///////////////////////////////////////////////////////
    $replace = array('nate', 'candice', 'garth', 'devon');
    $chunk = array_splice($array3, 3, -2, $replace);
    var_dump($chunk);
    var_dump($array3);
    /////////////////////////////////////////////////////
    //control statements
    //if else
    $i= 4;
    $age = 22;
    $logged_in = 'true';
    $bob = array (
        'car'=>array(
            'model' => 'M8',
            'make' => 'BMW'),
            'pet' => 'cat');

    if ($bob['car']['make'] == 'BMW') {
        echo 'yay';
    } else {
        echo 'nay nay';
    }

    /////////////////////////////////////////////////////
    //if else if
    $bob = array (
        'car'=>array(
            'model' => 'M8',
            'make' => 'BMW'),
            'pet' => 'cat');

    if ($bob['car']['make'] == 'BMW') {
        echo 'yay';
    }
    elseif ($bob['pets'] == 'cat') {
        echo 'achoo';
    }
    else {
        echo 'nay nay', '<br>';
    }
    

    ///////////////////////////////////////////////////////
    '<br>';

    $light = 'red';

    switch ($light) {
        case 'red':
            echo 'stop';
            break;
        case 'yellow':
            echo 'slow down';
            break;
        case 'green':
            echo 'go';
            break;
        
        default:
            echo 'treat as 4-way stop';
            break;
    }
    ?>
    <?php
    ///////////////////////////////////////////////////////////
    // loops //
    //for loops
    $class = array('jessie', 'marlon', 'urick', 'kaylem', 'tyrone', 'x', 'jp', 'taufeeq', 'josh', 'taariq', 'evan', 'gcobisa', 'micheal', 'regan', 'gedeon', 'natheer');

    $class_size = count($class);
    ?>

    <ul>
    <?php
    // for (i='0')
    ?>
    </ul>


    <?php
    //while loops
    $a = 0;
    while ($a <= 10) {
        echo 'I am working!';
    $a++;
    }
    //do while...
    $a = 0;
    do {
        echo 'I am living again!';
        $a++;
    } while ($a <= 10);
    
    ?>

    
</body>
</html>