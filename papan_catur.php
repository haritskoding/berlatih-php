<?php

function papan_catur($angka) {
    // tulis kode di sini
    for($i=0;$i<$angka;$i++){
        if($i%2==0){
            for($j=0;$j<$angka;$j++){
                echo "#";
            }
        }else{
            for($j=0;$j<$angka-1;$j++){
                echo "#";
            }
            echo" ";
        }       
        echo " <br/> ";
    }
    echo "<br/>";
 
 }
    
    // TEST CASES
    echo "papan 4<br/>";
    echo papan_catur(4);
    /*
    # # # #
     # # #
    # # # #
     # # #
     */
    echo "papan 8<br/>";
    echo papan_catur(8);
    /* 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    */
    echo "papan 5<br/>";
    echo papan_catur(5) 
    /*
    # # # # #
     # # # #
    # # # # #
     # # # # 
    # # # # #
    */

?>