<?php
    function f1()
    {
        echo "<br> function f1() executing";
    }

    function f2()
    {
        echo "<br> function f2() executing";
    }

    function compute($a,$b)
    {
        echo "<br>compute() function executing";
        $a();
        $b();
    }

    compute("f1","f2");
?>