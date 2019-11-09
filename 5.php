<?php

    $jumlah_serial = 3;
    var_dump(generateSerial($jumlah_serial));
    function generateSerial($count){    
        // master
        $number = range(0,9);
        $lo_case = range('a','z');
        $hi_case = range('A','Z');
        $char = array_merge($number,$lo_case);
        $char = array_merge($char,$hi_case);
        $history_serial = [];
        // master can change
        $separator = '-';//pemisah tiap block
        $block_length = 4;//banyaknya blok dengan pemisah ex:xxxx-xxxx-xxxx-xxxx => 4
        $length_each_block = 4;//banyaknya char tiap blok ex:xxxx => 4
        
        // 
        $try = 0;
        $result = [];
        while($try < $count){
            for($i=0;$i<$count;$i++){
                $serial = [];
                while(count($serial) < $block_length){
                    $str = '';
                    for($j=0;$j<$length_each_block;$j++){
                        $str.= $char[rand(0,count($char)-1)];
                    }    
                    $serial[] = $str;
                }
                $serial = implode($separator,$serial);
                if(in_array($serial,$history_serial) === false){
                    $historySerial[] = $serial;
                    $try++;
                    $result[] = $serial;
                }
            }
        }
        return $result;
    }
?>