<?php
    $ql = 'b';
    $qty = 6;
    var_dump(qlToQt($ql,$qty));

    function qlToQt($ql,$qty){
        $master = [
            'a' => [
                'harga' => 3000,
                'treshold' => 10,
                'disc' => 500,
                'disc_notation' => 'number'
            ],
            'b' => [
                'harga' => 3500,
                'treshold' => 5,
                'disc' => 50,
                'disc_notation' => 'percent'
            ],
            'c' => [
                'harga' => 5000,
                'treshold' => 0,
                'disc' => 0,
                'disc_notation' => null
            ]
        ];

        if(isset($master[$ql])){
            $harga = $master[$ql]['harga'];
            if($qty >= $master[$ql]['treshold']){
                $total_harga_barang = $harga*$qty;
                switch($master[$ql]['disc_notation']){
                    case 'number':
                        $potongan = $qty*$master[$ql]['disc'];
                    break;

                    case 'percent':
                        $potongan = $total_harga_barang*$master[$ql]['disc']/100;
                    break;
                }
                $total_bayar = $total_harga_barang - $potongan;
            }
            return [
                'total harga barang' => $total_harga_barang,
                'potongan' => $potongan,
                'total bayar' => $total_bayar
            ];
        }else{
            return 'tidak ada data barang';
        }
    }
?>