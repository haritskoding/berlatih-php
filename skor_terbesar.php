<?php
function skor_terbesar($arr){
  
//kode di sini
$keys = array_keys($arr);
for($i = 0; $i < count($arr); $i++) {
 
    // echo $keys[$i] . "{<br>";
    foreach($arr[$keys[$i]] as $key => $value) {
      
    echo $key." &nbsp;: &nbsp;".$value."&nbsp;&nbsp;";
    }
    echo "<br>";
}

}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r($skor);
echo "<br/>";
echo skor_terbesar($skor);


?>