<?php


$user=$_GET['user'];
$pass=$_REQUEST['pass'];

$pass_clean=filter_input(INPUT_GET,'pass',FILTER_SANITIZE_SPECIAL_CHARS);




$text=<<<TEST
hej $pass_clean

TEST;




echo htmlspecialchars($text);



 ?>
