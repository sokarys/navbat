<?php
    echo 'header<br>';
    $i=0;
    echo "<table>\n";
    for($i=0; $i<10; $i++){
        echo "\t<tr>\n";
        for($j=0; $j<10; $j++){
            echo "\t\t<td class=\"actiontd\" id=\"".$i."_".$j."\">".$i."_".$j."<td>\n";
        }
        echo "\t</tr>\n";
    }
    echo '</table>';
?>
