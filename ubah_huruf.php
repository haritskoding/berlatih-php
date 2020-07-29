<?php
function ubah_huruf($string){
    $abjad = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $karakter = str_split($string);
    $strtemp="";
    $alpabet="";
   foreach($karakter as $character){    
     if($character=="a"){
         $character="b";
     }else if($character=="b"){
         $character="c";
     }else if($character=="c"){
        $character="d";
    }else if($character=="d"){
        $character="e";
    }else if($character=="e"){
        $character="f";
    }else if($character=="f"){
        $character="g";
    }else if($character=="g"){
        $character="h";
    }else if($character=="h"){
        $character="i";
    }else if($character=="i"){
        $character="j";
    }else if($character=="k"){
        $character="l";
    }else if($character=="j"){
        $character="k";
    }else if($character=="l"){
        $character="m";
    }else if($character=="m"){
        $character="n";
    }else if($character=="n"){
        $character="o";
    }else if($character=="o"){
        $character="p";
    }else if($character=="p"){
        $character="q";
    }else if($character=="q"){
        $character="r";
    }else if($character=="r"){
        $character="s";
    }else if($character=="s"){
        $character="t";
    }else if($character=="t"){
        $character="u";
    }else if($character=="u"){
        $character="v";
    }else if($character=="v"){
        $character="w";
    }else if($character=="w"){
        $character="x";
    }else if($character=="x"){
        $character="y";
    }else if($character=="y"){
        $character="z";
    }else if($character=="z"){
        $character="a";
    }
     $strtemp.= $character;
    }  
    return $strtemp."<br/>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>