<?php

function palindrome_angka($angka) {
  // tulis kode di sini
 echo "$angka =";
 while(!is_palindrome($angka)){
   $angka++;
 }
 echo "$angka<br/>";
}

function is_palindrome($num){
  $numString ="$num";
  $len = strlen($numString);
  for($i=0; $i<$len/2; $i++){
    if($numString[$i] !== $numString[$len-$i-1]){
      if($numString[$i] !== $numString[$len-$i-1]){
        return false;
      }
    }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001


?>