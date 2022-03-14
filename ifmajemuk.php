<?php
    $nilai=40;
    if(($nilai>=0) && ($nilai<50)){
        $grade="E";
    }
    elseif(($nilai>=50) && ($nilai<60)){
        $grade="D";
    }
    elseif(($nilai>=60) && ($nilai<70)){
        $grade="C";
    }
    elseif(($nilai>=70) && ($nilai<80)){
        $grade="B";
    }
    elseif(($nilai>=80) && ($nilai<90)){
        $grade="A";
    }
    else{
        $grade="Nilai tidak memungkinkan";
    }
    echo"Nilai anda adalah $nilai. dikonversi menjadi $grade";
?>