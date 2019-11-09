<?php

    $ar = [
        ['a','c','b','e','d'],
        ['g','i','h','f'],
        // ['p','v','w'],
        ['z'],
        // ['l','n']
    ];
    var_dump(sorting_array($ar));

    function sorting_array($ar){
        foreach($ar as $index=>$are){
            // $temp = []; 
            for($i=0;$i<$index;$i++){
                if(count($are) < count($ar[$i])){
                    $temp = $ar[$i];
                    $ar[$i] = $are;
                    $ar[$index] = $temp;
                    var_dump($i);
                    var_dump($temp);
                    var_dump($ar[$i]);
                    var_dump($ar[$index]);
                    die();
                }
            }
            // sort($are);
            
            // foreach($are as $arel){
            //     $temp[] = $arel;
            // }
            // $result[] = $temp;
        }
        var_dump($ar);die();
        sort($result);
        var_dump($result);die();
    }
?>