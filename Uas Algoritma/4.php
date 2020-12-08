<?php

$gI = 1000;
$gII = 2000;
$array = [
    ["Nama"=>"Andi", "Golongan"=> "I", "KWH"=> 50],
    ["Nama"=>"Susi", "Golongan"=> "II", "KWH"=> 150],
    ["Nama"=>"Made", "Golongan"=> "I", "KWH"=> 1000],
    ["Nama"=>"Rosa", "Golongan"=> "II", "KWH"=> 1500],
];

array_walk($array, function($biaya) use ($gI, $gII) {
    echo "Nama : ". $biaya['Nama'] ."\n";
    echo "Golongan : ". $biaya['Golongan'] ."\n";
    echo "KWH : ". $biaya['KWH'] ."\n";
    echo "Biaya : ";
    if($biaya['Golongan'] == "I"){
        $tarif = $gI;
    }else{
        $tarif = $gII;
    }
    if($biaya['KWH'] <= 100){
        echo 100 * $tarif. "\n\n";
    }else if($biaya['KWH'] >= 1000){
        echo ($biaya['KWH'] * $tarif) + (0.1 * $biaya['KWH'] * $tarif). "\n\n";
    }else{
        echo $biaya['KWH'] * $tarif. "\n\n";
    }
});

?>