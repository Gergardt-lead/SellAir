<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $i = 0;
            while(true){
                if($i >= 7 and $i <= 15) echo $i;
                if($i == 16) break;
            }
            echo '<br />';
            $w = 1;
            while(true){
                $w++;
                if($w % 2 == 0 ){
                    echo $w;
                }
                if($w >= 10) break;
            }

            function creatTable($rows, $cols){
                echo '<table border="2" >';
                    for($i, $i <= $rows, $i++){
                        echo '<tr color="rgb(75, 186, 8)">';
                            for($w = 0, $w <= $cols, $w++){
                                echo '<td color="rgb(139, 69, 238)">'. $i * $w. '</td>';
                            }
                        echo '</tr>';
                    }
                echo "</table>";

            }


        ?>
    </body>
</html>
