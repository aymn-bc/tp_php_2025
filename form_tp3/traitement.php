<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $civilte = $_POST('civilite');
        $techs = $_POST('techs');
        $pays = $_POST("pays");
        $commentaire = $_POST("commentaire");
        if (isset($nom) && isset($email) && isset($civilite) && isset($techs) && isset($pays) && isset($commentaire)){
            if (empty($nom) && empty($email) && empty($civilite) && empty($techs) && empty($pays) && empty($commentaire)){
                echo "<p>tous les champs doivent etre remplir</p>";
            }else {
                echo "<h2>Bonjour, $nom !</h2>";
                echo "<p>Votre email est : $email</p>";
                echo "<p> civilité: $civilite</p>";
                echo "<p>techs: ";
                for ($i = 0; $i < count($techs); $i++){
                    echo $techs[$i];
                }
                echo "</p>";
                echo "<p>pays: $pays</p>";
                echo "<p> commentaire: $commentaire</p>";
            }
        }else{
            echo "<p>Le formulaire n'a pas été soumis correctement.</p>";
        }
        // print_r($_POST);
        // echo "<br/>";
        var_dump($_POST);
    ?>
</body>
</html>