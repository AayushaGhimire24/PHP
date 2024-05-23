<?php
//write a php to create a multidimentional associative array and display the elements of that array in tabular format

$arr = array('e'=>'five','c'=>'three','g'=>'seven','a' =>'one','f'=>'six',
            'b' => 'two','d' => 'four');
            foreach($arr as $v){
                echo "<tr>";
                foreach($v as $m){
                    echo "<td>$m</td>";
                }
                echo "<tr>";
            }