<?php
$arr=array('one','two','three','four','stop','five');
foreach($arr as $val){
    if($val=='stop'){
        break;//you could also write 'break 1;' here.
    }
    echo "$val<br/>";
}
?>
<?php
$i=0;
while(++$i){
    switch($i){
        case 5:
            echo "At 5<br/>";
            break 1;//exit only the switch
            case 10:
                echo "At 10; quitting<br/>";
                break 2;//exit the switch and the while.
                default:
                break;
    }
}
?>