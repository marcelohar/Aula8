<?php
    // 1 - testando alterações!
    
    // testando 2º segunda alteração caso esqueça algo no comite

    function fator($n){

        if($n<=1){
            return 1;
        }else{
            return $n * fator($n - 1);
        }
    }

    echo fator(4);
?>
