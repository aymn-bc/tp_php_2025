<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits = ["Potato", "Banana", "Lemon"];
        sort($fruits); 
        function myFormat($val, $key){
            echo "$key- Fruit name: $val <br>";
        }
        array_walk($fruits, 'myFormat');
        
        natcasesort($fruits);
        var_dump($fruits);
        echo "<br>";
                
        /* natsort (human sort example:
        Original array:
        Array
        (
            [0] => img12.png
            [1] => img10.png
            [2] => img2.png
            [3] => img1.png
        )

        Natural order sorting:
        Array
        (
            [3] => img1.png
            [2] => img2.png
            [1] => img10.png
            [0] => img12.png
        )
        )
        */

        //SERVER & REQUEST

        // $_GET[], $_POST, $_REQUEST 

        function infos(){
        $env = array('remote_addr','http_accept_language','http_host',
        'http_user_agent','script_filename',
        'server_name','server_software',
        'request_method','request_uri','script_name');
        // Construction d'un tableau associatif
        // Avec les valeurs lues dans l'environnement
        $retour =array();
        foreach ($env as $clef) $retour[$clef] = $_SERVER(strtoupper($clef));
        return $retour;
        }
        echo("Voici les infos disponibles:<BR>");
        $tab = infos();
        foreach ($tab as $clef=>$val) echo $clef." :".$val."<br>\n";
    ?>
    
</body>
</html>