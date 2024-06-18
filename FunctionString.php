<?php
//String manipulation function
$fullname="Aayusha Ghimire";//counts space too
//echo strlen($fullname);
//str_word_count(counts number of words);
//echo str_word_count($fullname);
//echo strrev($fullname);// used to reverse string
echo str_replace("Aayusha","Aayush",$fullname);//replaces some character with other character

//echo substr($fullname,3);//returns a part of a string
//echo strpos("Hello BIM fourth Web Class , Web Technology","web");//used to find certain substring inside a string
//echo trim("Hello","He");
//echo ltrim("Hello bye","He");//removes whitespace or other predefined characters form left side 
echo rtrim("Hello namaste","et");//removes whitespace or other predefined characters form right side 
 //echo strtoupper($fullname);//converts string to uppercase
 //echo strtolower($fullname);
 //echo ucfirst("hello");//converts first character of string into uppercase
 //echo ucwords("ariel bye"."<br>");//converts each first characters of words of a string to uppercase
 //echo lcfirst("AAYUSHA AAYUSH"."<br>");//converts first character of string into lowercase
//echo chunk_split($fullname,2,".");//splits a string into series of smaller part
//echo strcmp("apple","ball") ;//compares two strings*/
?> 