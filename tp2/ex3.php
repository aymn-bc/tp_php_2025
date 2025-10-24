<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        $toFour = [0,1,2,3,4];
        $table = [];
        echo "<h3>Lecture using foreach loop: </h3>";
        foreach($toFour as $row){
            $table[$row] = [];
            foreach($toFour as $col){
                $table[$row][$col] = "..ligne$row-colonne$col..";
                $j++;
            }
        }

        echo "<table border='1'>";
        foreach($table as $row){
            echo "<tr>";
            foreach($row as $col){
                echo "<td>".$col."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        $table=[];

        $i=$j=0;
        echo "<br/><h3>Using while loop: </h3>";
        while($i < 5){   
            while($j < 5){
                $table[$i][$j] = "..ligne$i-colonne$j..";
                $j++;
            }
            $j=0;
            $i++;
        }

        $i=$j=0;
        echo "<table border='1'>";
        while($i < 5){   
            echo "<tr>";
            while($j < 5){
                echo "<td>" . $table[$i][$j] . "</td>";
                $j++;
            }
            echo "</tr>";
            $j=0;
            $i++;
        }
        echo "</table>";

    ?>
</body>
</html>