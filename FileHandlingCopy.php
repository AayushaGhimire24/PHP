<?php
//destination ko lagi new file banako
$filename="file1.txt";
$file=fopen($filename,"w");
if($file==false){
    echo "Error in opening new file";
    exit();
}
fclose($file);
//to copy from source to destination
$srcfile='file.txt';
$destfile='file1.txt';
if(!copy($srcfile,$destfile)){
    echo "file cannot be copied";
}else{
    echo "File has been copied";
}

?>