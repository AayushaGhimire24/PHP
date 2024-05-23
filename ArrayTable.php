<html>
    <head>
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td rowspan="2">S.NO</td>
                <td rowspan="2">Name</td>
                <td rowspan="2">Place</td>
                <td colspan="2">time</td>
                <td rowspan="2">amount</td>
            </tr>
            <tr>
            <td>Arrival</td>
            <td>Departure</td>
</tr>
<?php
$arr=array(
    array(1,"Ram","Newroad","7:30","8:45",25),
    array(2,"Sita","Gaushala","6:30","9:30",30)
);
foreach($arr as $v){
    echo "<tr>";
    foreach($v as $m){
        echo "<td>$m</td>";
    }
    echo "<tr>";
}
?>


