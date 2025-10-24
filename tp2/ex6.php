<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $capital = [
            "Tunisie" => "Tunis"
            ,"France" => "Paris"
            ,"Allemagne" => "Berlin"
            ,"Serbie" => "Belgrade"
            ,"Brésil" => "Brasilia"
            ,"Slovaquie" => "Bratislava"
            ,"Italie" => "Rome"
            ,"Venezuela" => "Caracas"
            ,"Moldavie" => "Chisinau"
            ,"Guyana" =>"Georgetown"
            ,"Guatemala"=>"Guatemala"
        ];
        echo "<form>";
        echo "<select id='capitals' name='capitals'>";
            echo "<option value='-----'> -----</option>";
        foreach($capital as $key => $value) {
            echo "<option value=$key> $value</option>";
        }
        echo "</select>";
        echo "</form>";
    ?> 
</body>
</html>