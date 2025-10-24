<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    *{
        text-align: center;
    }
</style>
<body>
    <?php

        $notes_apprenants = array(
            "Mohamed" => "16",
            "Ahmed" => "14",
            "Rafika" => "13",
            "Aicha" => "15",
            "Samir" => "13",
            "Samar" => "13",
            "Rafik" => "10",
            "Samiha" => "09",
            "Fourat" => "07",
            "Sami" => "07",
            "Noura" => "14"
        );

        #L'ajout au tableau
        $notes_apprenants += [ "Naim"=>10, "Naima"=>12, "Nsib"=>10 ];
        
        $myString = "";

        foreach($notes_apprenants as $key=>$val){
            $myString = $myString . "
                <tr>
                    <td>$key</td>
                    <td>$val</td>
                </tr>
            ";
        }
        echo "<h1>without any sorting method</h1>";
        echo "
        <table class='table table-bordered'>
            <tr>
                <th>Nom</th>
                <th>Notes</th>
            </tr>
            $myString
        </table>";

        $myString = "";
        $sorted_notes_croissant = $notes_apprenants;
        asort($sorted_notes_croissant);

        foreach($sorted_notes_croissant as $key=>$val){
            $myString = $myString . "
                <tr>
                    <td>$key</td>
                    <td>$val</td>
                </tr>
            ";
        }

        echo "<h1>table croissant</h1>";
        echo "
        <table class='table table-bordered'>
            <tr>
                <th>Nom</th>
                <th>Notes</th>
            </tr>
            $myString
        </table>";
        
        $myString = "";
        $sorted_notes_decroissant = $sorted_notes_croissant;
        arsort($sorted_notes_decroissant);

        foreach($sorted_notes_decroissant as $key=>$val){
            $myString =  $myString . "
                <tr>
                    <td>$key</td>
                    <td>$val</td>
                </tr>
            ";
        }

        echo "<h1>table decroissant</h1>";
        echo "
        <table class='table table-bordered'>
            <tr>
                <th>Nom</th>
                <th>Notes</th>
            </tr>
            $myString
        </table>";

        $maxValue = max($notes_apprenants);
        $meilleure_note = array_search($maxValue, $notes_apprenants);
        echo "Le nom d'etudiant qui a la meilleure note: " . $meilleure_note . "<br>";
        
        $minValue = min($notes_apprenants);
        $note_la_plus_bas = array_search($minValue, $notes_apprenants);
        echo "Le nom d'etudiant qui a la note la plus bas: " . $note_la_plus_bas . "<br>";


        $myString = "";
        ksort($notes_apprenants);
        foreach($notes_apprenants as $key=>$val){
            $myString = $myString . "
                <tr>
                    <td>$key</td>
                    <td>$val</td>
                </tr>
            ";
        }

        echo "
        <h1>Alphabetical order</h2>
        <table class='table table-bordered'>
            <tr>
                <th>Nom</th>
                <th>Notes</th>
            </tr>
            $myString
        </table>";


        //classement par ordre merite
        $myString = "";
        $ordre_merite = $notes_apprenants;
        arsort($ordre_merite);
        foreach($ordre_merite as $key=>$val){
            $myString .= "
                <tr>
                    <td>$key</td>
                    <td>$val</td>
                </tr>
            ";
        }

        echo "<h1>Classement par ordre de mérite</h1>";
        echo "
        <table class='table table-bordered'>
            <tr>
                <th>Nom</th>
                <th>Notes</th>
            </tr>
            $myString
        </table>";

        $classe_moy = 0;
        foreach($notes_apprenants as $key=>$val){
            $class_moy += $val;
        }
        $class_moy /= count($notes_apprenants);
        echo "moyenne de classe: ".$class_moy;
    ?>

    
</body>
</html>