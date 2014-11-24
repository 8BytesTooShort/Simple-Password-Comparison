<?php
//Configuration
$SETPASS = 'test';
$SETPASS2 = 'test2';
// End configuration
$mystring = (isset($_POST["string"]) ? $_POST["string"] : null);
$password = sha1(md5($SETPASS));
$password2 = sha1(md5($SETPASS2));
$pass = sha1(md5($mystring));
$success = '<span style="color:#32C900;">Access granted</span><br><br>';
$denied = '<span style="color:red;">Access denied</span><br><br>';
 if ($pass == $password) {
 	echo $success . '<br>' . '<span style="color:#32C900;">' . $pass . ' </span>= ' . $password . '<br><br';
 }
 elseif ($pass == $password2) {
 	echo $success . '<br>' . '<span style="color:#32C900;">' . $pass . ' </span>= ' . $password . '<br><br';
 }
 else {
 	echo $denied . '<br>' . '<span style="color:red;">' . $pass . ' </span>!= ' . $password . '<br><br>';
 }
?>