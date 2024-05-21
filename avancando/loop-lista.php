<?php
//Queremos que ele itere até o sexto item desse array - ou seja, $i < 7. 
//Enquanto esse valor não for alcançado, o contador será incrementado com $i++
/**$idadeList = [21, 23, 19, 25, 30, 32, 18];

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}*/

$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
    //echo count($idadeList) . PHP_EOL;
}