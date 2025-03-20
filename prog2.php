<?php
    $numericArray = array(1,"Maths",3,"Science",5);
    $associativeArray = array("ram"=>25000,"john"=>35000, "jim"=>40000);

    echo "Numeric Array is :";
    foreach($numericArray as $i)
    {
        echo " ".$i;
    }
    echo "<br>";
    echo "<br>Associative Array is :";
    foreach($associativeArray as $i=>$j)
    {
        echo "<br>Name is ".$i." and salary is ".$j;
    }

?>