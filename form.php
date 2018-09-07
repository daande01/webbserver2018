


<?php
header('Content-type: text/html; charset=utf-8');


echo $_GET['user'];


$user_clean = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_SPECIAL_CHARS);

echo $user_clean;

echo<<<TEST


<a href="test.php"> $user_clean</a>

TEST;


 ?>
