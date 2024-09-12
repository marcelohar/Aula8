<?php

    function fator($n){

        if($n<=1){
            return 1;
        }else{
            return $n * fator($n - 1);
        }
    }

    echo fator(4);
?>
