<?php

    $ar = [
        ['a','c','b','e','d'],
        ['g','e','f']
    ];

    $ar1 = [
        ['g','h','i'],
        ['a','c','b','e','d'],
        ['g','e','f'],
        ['z','d']
    ];
    var_dump(sorting_array($ar1));

    function sorting_array($ar){
        $iar = [];
        foreach($ar as $art){
            $iar[] = count($art);
        }
        asort($iar);
        $far = [];
        foreach($iar as $ind=>$lar){
            $far[] = $ar[$ind];
        }
        foreach($far as $in=>$flar){
            sort($far[$in]);
        }
        return $far;
    }
?>