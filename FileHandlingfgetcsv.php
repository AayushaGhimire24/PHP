<?php
$file=fopen("enclosure.csv","r");
print_r(Fgetcsv($file));
echo"<br>";
fclose($file);//one line matra print huncha

//sav read garna chai loop lagauna parcha
$file=fopen("enclosure.csv","r");
while(!feof($file)){
    print_r(fgetcsv($file));
    echo"<br>";
}
fclose($file);
?>