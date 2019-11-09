<?php
    echo persegi(5);

    function persegi($limit){
        for($i=0;$i<$limit;$i++){
            for($j=0;$j<$limit;$j++){
                if($i%2 == 0 && $j%2 == 0){
                    echo '=';
                }elseif($i%2 == 0 && $j%2 != 0){
                    echo '*';
                }elseif($i%2 != 0 && $j%2 == 0){
                    echo '*';
                }elseif($i%2 != 0 && $j%2 != 0){
                    echo '=';
                }
            }
            echo '<br/>';
        }
    }
?>