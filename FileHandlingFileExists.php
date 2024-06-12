<?php
$file="file1.txt";
if(file_exists($file))
{
    echo"File exists";
}else{
    echo "file doesnot exists";
}
//file rename
$file="file1.txt";
if(file_exists($file)){
if(rename($file,"file.txt")){
    echo"file renamed successfully";
}else{
    echo "file cannot be renamed";
}
}
else{
    echo "file doesnot exist";
}

//deleting file
$file="text.txt";
if(!unlink($file)){
    echo("Error deleting $file");
}else{
    echo("Deleted $file");
}

?>
