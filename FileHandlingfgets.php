<?php
//php read single line-fgets()
//length deko xa vane tei read garcha,navaye 1024
$file=fopen("file1.txt","r");
echo fgets($file)."<br>";
fclose($file);

//using loop for the end of a file
$file=fopen("file1.txt","r");
while(! feof($file)){
    echo fgets($file)."<br/>";
}
fclose($file);



//fgetsc returns single character from a file
$file=fopen("file1.txt","r");
echo fgetc($file)."<br>";
fclose($file);

$file=fopen("file1.txt","r");
while(! feof($file)){
    echo fgetc($file)."<br/>";
}
fclose($file);
