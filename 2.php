<?php
    $tb = 110500;
    $tu = 200000;
    var_dump(kembalian($tb,$tu));
    function kembalian($tB,$tU){
        if(isset($tB) && isset($tU) && $tU > $tB){
            $return = [
                'kembalian' => [],
                'sumbangan' => 0
            ];
            $cB = 0;
            if($tB > 200000){
                $cB = ceil($tB*10/100);
            }
            $kembali = $tU-$tB;
            while($kembali >= 500){
                if($kembali > 50000){
                    $uang = 50000;
                }elseif($kembali > 20000){
                    $uang = 20000;
                }elseif($kembali > 10000){
                    $uang = 10000;
                }elseif($kembali > 5000){
                    $uang = 5000;
                }elseif($kembali > 2000){
                    $uang = 2000;
                }elseif($kembali > 1000){
                    $uang = 1000;
                }else{
                    $uang = 500;
                }
                $lembar = floor($kembali/$uang);
                $return['kembalian'][] = [$uang => $lembar];
                $kembali = $kembali-$uang*$lembar;
            }
            $return['sumbangan'] = $kembali;
            var_dump($return);die();
            return $return;            
        }
        return 'jumlah uang tidak ada, atau jumlah bayar tidak ada atau jumalh uang lebih kecil dari pada jumlah bayar';
    }
?>