<?php

function drawTable($cols=10,$rows=10,$color="yellow"){
    // global$str;
    static $str=0;
    $str++;
    echo "Таблица рисуется $str раз(а)";

    echo "<table border='1'>";
    for ($tr=1;$tr<=$rows;$tr++){
        echo "<tr>";
        for ($td=1;$td<=$cols;$td++){
            if ($tr==1 or $td==1)
                echo "<th style='background-color: $color'>".$tr*$td."</th>";
            else
                echo "<td>".$tr*$td."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
};
?>

