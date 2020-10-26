<?php
    function averageOfTwo($num1, $num2){
//        $avg = ($num1 + $num2) / 2;
//        return $avg;
        return (($num1 + $num2) / 2);
    }

    echo "The average is " .  averageOfTwo(5, 3) . "<br>";

    function circumference($radius){
        return($radius*2) * 3.14;
    }

    echo "The circumference is " . circumference(5);

    $x = 3;
    $y = "3";
    if ($x === $y) {
        echo "<p>Yes</p>";
    } else {
        echo "<p>No</p>";
    }

    echo (3%2);

    echo"<pre>";
    $age[] = array(19, 20, 21);
    $age[] = "hello";
    $age[] = false;
    $age[] = -5.25;
    var_dump($age);
    echo"</pre>";

    echo $age[2];

    switch($age){
        case 20:
            echo "20";
        case 21:
            echo"21";
        case 22:
            echo "22";
            break;
    }