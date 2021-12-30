<?php

$lig = 11;
for($i=0;$i<$lig;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}

for($i=$lig;$i>0;$i--){
    for($j=$i;$j>0;$j--){
        echo "*";
    }
    echo "\n";
}