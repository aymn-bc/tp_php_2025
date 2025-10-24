<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $table = [
            'Prenom'=>[
                "Thamer",
                "Mohamed",
                "Mounira",
                "Samira",
                "Tarek",
                "Riadh",
                "Radhia",
                "Tkaya",
                "Taher",
                "Kaies",
            ],
            'Noms'=>[
                "NAJJAR",
                "NUIRI",
                "HANI",
                "SAHLI",
                "BAKLOUTI",
                "DJEBBI",
                "OMRI",
                "SOMARI",
                "OMANI",
                "SOMII"
            ],
            'Groupe'=>[
                'TMMSI:02'
            ],
            'Date de naissance' => [
                '12/12/1993',
                '22/02/1993',
                '13/03/1994',
                '23/11/1992',
                '14/03/1993',
                '13/01/1993',
                '14/01/1992',
                '14/05/1992',
                '02/04/1992',
                '2/10/1993'
            ],
            'Lieu de naissance' => [
                'Tazarka',
                'MAAMOURA',
                'BniKhalled',
                'Tala',
                'Nafta',
                'Manouba',
                'Sfax',
                'Tataouine',
                'Hajeb elyoun',
                'Nabeul'
            ],
            'Adresse'=>[
                'Rue ettaoufik',
                'Rue ettahrir',
                'Ennadhour',
                'Matmata ejanoubia',
                '37 Rue Ennour',
                '02 impasse 5320',
                'Avenu H.B',
                'Avenu H.B',
                'Chez ahmed Mtir',
                'Cité Ennour'
            ],
            'Code postal' =>[
                8000,8020,5120,5120,1020,1080,4020,77010,3160,3020
            ],
            'Gouvernorat'=>[
                'Nabeul',
                'Bni Khiar',
                'Zaghouene',
                'Zaghouene',
                'Tunis',
                'Mannouba',
                'Sfax',
                'Mednine',
                'Kairouan',
                'Gafsa'
            ],
            'Pays'=>['Tunisie']
        ];

        $keys = array_keys($table);
        echo "<table border='1'>";
        echo "<tr style='background-color:brown'>";
        for ($i = 0; $i < count($keys); $i++){
            echo "<th>" . $keys[$i] . "</th>";
        }
        echo "</tr>";

        $counter = 0;
        for ($i = 0; $i < count($table['Prenom']); $i++){
            echo "<tr>";
            if ($counter % 2 == 1) $style = "#ffbd59";
            else $style = "#ff8359";
            foreach ($keys as $key){
                if ($key == 'Prenom'){
                    echo "<td style='background-color:$style;font-weight:bold'>".$table[$key][$i % count($table[$key])]."</td>";
                }else{
                    echo "<td style='background-color:$style'>".$table[$key][$i % count($table[$key])]."</td>";
                }
            }
            echo "</tr>";
            $counter += 1;
        }

        echo "</table>";
    ?>
</body>
</html>