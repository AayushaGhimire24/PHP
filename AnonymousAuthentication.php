<?php
if(!isset($_SERVER['PHP_AUTH_USER'])){
header('WWW-Authenticate:Basic realm="My Realm"');
header('HTTP/1.0 401 Unauthorized');
echo 'Couldnot login please enter a username and password';
exit;
}else{
    echo"<p>Hello{$_SERVER['PHP_AUTH_USER']}.</P>";
    echo"<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>