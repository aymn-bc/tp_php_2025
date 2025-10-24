<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th{
        background-color: brown;
    }
    td, th{
        padding: 5px;
        text-align: center;
    }
</style>
<body>
    <?php 
        echo "<table border='1'>";
        for($i = 1; $i < 11; $i++){
            echo "<tr>";
            for($j = 1; $j < 11; $j++){
                if ($i == 1 || $j == 1){
                    if ($i == 1 && $j == 1) echo "<th></th>"; 
                    else echo "<th>". $i*$j . "</th>";
                }else{
                    if ($i%2 == 1){
                        $style = "#ffbd59";
                    }else {
                        $style = "#ff8359";
                    }
                    echo "<td style='background-color:$style'>". $i*$j . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

        
    ?>
</body>
</html>