<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="traitement.php" method="get">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Envoyer">
    </form> -->

    <form action="traitement.php" method="post">
    <h2>Informations de base</h2>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <p>Civilité (Radio) :</p>
    <input type="radio" id="civilite_m" name="civilite" value="M." required>
    <label for="civilite_m">Monsieur</label>
    <input type="radio" id="civilite_mme" name="civilite" value="Mme">
    <label for="civilite_mme">Madame</label><br><br>

    <h2>Vos préférences</h2>

    <p>Technologies (Checkbox - Choix multiples) :</p>
    <input type="checkbox" id="tech_php" name="techs[]" value="PHP">
    <label for="tech_php">PHP</label>
    <input type="checkbox" id="tech_js" name="techs[]" value="JavaScript">
    <label for="tech_js">JavaScript</label><br><br>

    <label for="pays">Pays (Select unique) :</label>
    <select id="pays" name="pays">
        <option value="FR">France</option>
        <option value="CA">Canada</option>
    </select><br><br>

    <label for="couleurs">Couleurs (Select multiple - Ctrl/Cmd + Clic) :</label>
    <select id="couleurs" name="couleurs[]" multiple size="3">
        <option value="bleu">Bleu</option>
        <option value="vert">Vert</option>
        <option value="rouge">Rouge</option>
    </select><br><br>

    <label for="commentaire">Commentaire (Textarea) :</label><br>
    <textarea id="commentaire" name="commentaire" rows="3" cols="40"></textarea><br><br>

    <input type="submit" value="Envoyer">
</form>
</body>
</html>