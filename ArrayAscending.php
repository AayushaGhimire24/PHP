<?php
//Wap  to define an array and display its elemnts in ascending
$arr=array(1,4,5,7,2,8);
sort($arr);
foreach($arr as $v){
echo "<br>".$v;
}
//wap to sort in descending
rsort($arr);
foreach($arr as $v){
echo "<br>".$v;
}
?>