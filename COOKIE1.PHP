<?php
//cookie lai modify garda name paxi ko value change garne ho
setcookie("name","Aayusha Ghimire",time()+3600, "/","",0);//cookie delete garda chai time()- garne ho
setcookie("age","36",time()+3600,"/","",0);
echo "set cookies";
echo $_COOKIE['name'];
echo $_COOKIE['age'];

?>
