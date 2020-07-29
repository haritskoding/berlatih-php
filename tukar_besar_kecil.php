<?php
// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

function tukar_besar_kecil($string){
    $caw = str_split($string);
    foreach($caw as $character){
        if (ctype_upper($character)) {
            echo strtolower($character);
        } else {
            echo strtoupper($character);
        }
    }
    echo "<br/>";   
}



?>