<?php
function is_arithmetic($arr)
  {
   $delta = $arr[1] - $arr[0];
   for($index=0; $index<sizeof($arr)-1; $index++)
    {
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
             
             return "False";
        }       
    }
    return "True";
}


echo is_arithmetic([1, 2, 3, 4, 5, 6])."<br/>";// true
echo is_arithmetic([2, 4, 6, 12, 24])."<br/>";// false
echo is_arithmetic([2, 4, 6, 8])."<br/>"; //true
echo is_arithmetic([2, 6, 18, 54])."<br/>";// false
echo is_arithmetic([1, 2, 3, 4, 7, 9])."<br/>";// false
?>