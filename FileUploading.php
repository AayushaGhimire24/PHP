<?php
$path="/form/basename.php";//show filename with file extension
echo basename($path)."<br/>";//show filename without file extension
echo basename($path,"php");//pathinfo() function:pathinfo(path,options)
print_r(pathinfo("/testweb/test.txt"));//php file_exists():checks wheather or not a file or directory exists
echo file_exists("test.txt");
?>
