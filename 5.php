<?php

    $string = 'hello';
    var_dump(orderString($string));

    function orderString($string) {  
        $ar = str_split($string);
        sort($ar);
        $imp = implode('', $ar);
        return $imp;  
    }