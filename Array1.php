<?php
$names=array("A","B","C",1);
//echo$names[2];
//$marks=[20,30,40];
//echo $marks[0];


//using for loop
$names=array("A","B","C",1);
for($i=0;$i<sizeOf($names);$i++){
    echo $names[$i];
}
//using for each
$marks=[20,30,40];
echo $marks[0];
foreach($marks as $val){
    if($val==1){
        break;
    }
    echo "$val<br/>";
}
 
?>

