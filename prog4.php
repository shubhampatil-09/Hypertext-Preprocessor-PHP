<?php
    $n=5;

    function fib($n,$a=0,$b=1)
    {
        if($n==0)
            return;

        echo $a . " ";
        return fib($n-1,$b,$a+$b);
            
    }

    fib($n);
?>