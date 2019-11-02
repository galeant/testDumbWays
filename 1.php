<?php
    $array = [1,2,3,4,5];
    var_dump(minArray($array));
    function minArray($array){
        $index = 0;
        $arLength = count($array);
        $arTemp = [];
        while($index < $arLength){
            $sum = 0;
            foreach($array as $in=>$ar){
                if($in != $index){
                    $sum+=$ar;
                }
            }
            $arTemp[] = $sum;
            $index++;
        }
        $max = max($arTemp);
        $min = min($arTemp);
        return [
            'min' => $min,
            'max' => $max
        ];
    }
?>