<?php 
function drawTab($nbLignes, $nbCols, $classeBlack, $classeWhite)
{
    for($i = 0; $i < $nbLignes; $i++){
        echo "<tr>";
        if($i % 2 === 0) $nbCase = 8;
        else $nbCase = 9;

        for($j = 0; $j < $nbCols; $j++){
            $classe = $classeWhite;
            if($nbCase % 2 === 0) $classe = $classeBlack;
            echo "<td class=$classe></td>";
            $nbCase--;
        }
        echo "</tr>";
    }
}
