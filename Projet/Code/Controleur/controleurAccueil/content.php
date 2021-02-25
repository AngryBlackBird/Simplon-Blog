<?php


require_once "../../secure/log.php";
require_once "../Modèle/wordOject.php";

$test = new Word($servername, $username, $password, $dbname);
$date1 = "2012-04-01";
$date2 = "2030-04-01";
$dataReponse = $test->selectWordByDate($date1, $date2);



$count = count($dataReponse);
// var_dump($count);
for ($i = 0; $i < $count; $i++) :
    $count2 = count($dataReponse[$i]);
    //  for ($j = 0; $j < $count2; $j++) :
?>
    <h1 class="page__content-title"><?php echo $i + 1 ?></h1>
<?php
    echo $dataReponse[$i][1];
endfor;
?>