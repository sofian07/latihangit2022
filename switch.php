<?php
    $angka=4;
    switch($angka){
        case 0: $terbilang ="NOL"; break;
        case 1: $terbilang ="SATU"; break;
        case 2: $terbilang ="DUA"; break;
        case 3: $terbilang ="TIGA"; break;
        case 4: $terbilang ="EMPAT"; break;
        default: $terbilang="Nilai diluar jangkauan";        
    }
    echo"Bentuk dari angka $angka terbilang $terbilang";

?>