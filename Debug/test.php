<?php

    /*$value=0;

    if($value==0){
        echo "invalid";
    } else{
        echo "valid";
    }*/

    $output = shell_exec('ls -l');

    // Imprimir el resultado
    echo "<pre>$output</pre>";

?>