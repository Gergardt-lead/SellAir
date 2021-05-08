<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            /*
            function createTable($rows, $cols, $tableSize, $borderColor, $headColor, $fieldsColor){
                    echo "<table border='$tableSize' bordercolor='$borderColor'>";
                        for($i = 1; $i <= $rows; $i++){
                            echo "<tr>";
                            for($j = 1; $j <= $cols; $j++){
                                if($j == 1 or $i == 1) echo "<td style='background-color:$headColor; font-weight:bold; text-align:center;'>";
                                else echo "<td style='background-color:$fieldsColor;'>";
                            echo $i * $j;
                            echo "</td>";
                            }
                        echo "</tr>";
                        }
                    echo "<table>";
                    }
            */

            function createTable($rows, $cols, $sizeTable, $colorLines, $topColor, $colorCenter ){
                echo "<table border='$sizeTable' bordercolor='$colorLines'>";
                    for($i = 1; $i <= $rows; $i++){
                        echo "<tr>";
                            for($w; $w <= $cols; $w++){
                                if($i == 1 or $w == 1) echo "<td style='background-color:$topcolor; font-weight:bold; text-align:center;' >";
                                else echo "<td style='background-color:$colorCenter'>";
                                echo $i * $w;
                                echo "</td>";
                            }
                        echo "</tr>";
                    }
                echo "</table>";
            }

            createTable($_POST['cols'], $_POST['rows'], $_POST['sizeTable'], $_POST['colorLines'], $_POST['topColor'], $_POST['colorCenter'])
         ?>
         <form class="POST" action="">
             <input type="text" name="rows">
             <input type="text" name="cols">
             <input type="text" name="sizeTable">
             <input type="color" name="colorLines">
             <input type="color" name="topColor">
             <input type="color" name="colorCenter">
             <input type="submit" name="" value="Отправить">
        </form>

    </body>
</html>
