<?php

    $a=10;
    $b=10.5;
    $c="Hello World";
    $d=true;
    $e=array("English","Hindi","Marathi");

    echo "Displaying the values";
    echo "<br>Value of a is ".$a;
    echo "<br>Value of b is ".$b;
    echo "<br>Value of c is ".$c;
    echo "<br>Value of d is ".$d;
    echo "<br>Value of e is ";
    foreach($e as $i)
    {
        echo " ".$i;
    }

    echo "<br>";
    echo "<br>Displaying the type of datatype<br>Type of a is ".gettype($a);
    echo "<br>Type of b is ".gettype($b);
    echo "<br>Type of c is ".gettype($c);
    echo "<br>Type of d is ".gettype($d);
    echo "<br>Type of e is ".gettype($e);
?>