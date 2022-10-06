<?php

function Fatorial($numero)
{
    if($numero == 1){
        return 1;
    }else{
        return $numero * Fatorial($numero - 1);
    }
}


echo Fatorial(5);
print "<br>";
echo Fatorial(10);

