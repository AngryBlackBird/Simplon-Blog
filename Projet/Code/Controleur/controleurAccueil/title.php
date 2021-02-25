<?php

    require_once "../../secure/log.php";
    require_once "../Modèle/wordOject.php";

    $insertData = new Word($servername, $username, $password, $dbname);
    $date1 = "2012-04-01";
    $date2 = "2030-04-01";
    $dataReponse = $insertData->selectWordByDate($date1, $date2);



    $count = count($dataReponse);
   // var_dump($count);
    for ($i = 0; $i < $count; $i++) :
        $count2 = count($dataReponse[$i]);
        //  for ($j = 0; $j < $count2; $j++) :

            

?>
        <tr>
            <td align="left">Part <?php echo $i+1; ?></td>
            <td align="left"><?php echo $dataReponse[$i][0] ?></td>
        </tr>

<?php
    endfor;

?>