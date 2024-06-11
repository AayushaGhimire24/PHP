<?php
$list=array(
    "Stewie,Griffin,Oslo,Ohio",
    "Glenn,Quagmire,Oslo,Norway",
);
$file=fopen("enclosure.csv","w");
foreach($list as $line){
    fputcsv($file,explode(',',$line));
}
fclose($file);
?>