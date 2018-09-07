



<?php

require 'db_conn.php';

$dbob=dbconn();



$clean_rubrik=filter_input(INPUT_GET,'rubrik',FILTER_SANITIZE_SPECIAL_CHARS);
$clean_antal=filter_input(INPUT_GET,'antal',FILTER_SANITIZE_SPECIAL_CHARS);
$clean_pris=filter_input(INPUT_GET,'pris',FILTER_SANITIZE_SPECIAL_CHARS);
$clean_beskrivandetext=filter_input(INPUT_GET,'beskrivandetext',FILTER_SANITIZE_SPECIAL_CHARS);


$stmt = $dbob->prepare ('
    INSERT INTO artiklar (rubrik, antal,beskrivandetext,pris) VALUES (:rub, :ant,:bes,:pri);
');
$stmt -> bindParam(':rub', $clean_rubrik);
$stmt -> bindParam(':ant', $clean_antal);
$stmt -> bindParam(':bes', $clean_beskrivandetext);
$stmt -> bindParam(':pri', $clean_pris);
$stmt -> execute();








 ?>
