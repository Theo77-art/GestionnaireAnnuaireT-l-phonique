<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Document</title>
</head>
<body>
    <div id="formulaire">
        <h1>Formulaire d'enresitrement</h1>
       <form method="post">
        <fieldset>
         <label for="nom">Votre nom</label>
         <input type="text" name="nom" id="nom" required>
         <label for="prenom">Votre prénom</label>
         <input type="text" name="prenom" id="prenom" required>
         <label for="numero">Votre numéro de téléphone</label>
         <input type="tel" name="numero" id="numero" required>
         <input type="submit" value="Enregistrer">  
        </fieldset>
        <?php 
        
        $data = json_encode($_POST);
        

        if(!empty($data)){
            $monFichier = fopen("data.txt","a") or die("Le Fichier n'a pas pu être ouvert");   
            fwrite($monFichier, var_export($data, TRUE));
            fclose($monFichier);
            echo 'Enregistrement réussi';
        }
        else{
            echo 'Le Formulaire n\'a pas été rempli!!!';
        } ?>
       </form>
       <a href="index.php">Retourner a l'acceuil</a>
        <a href="liste.php">Afficher les numéros enregistrés</a>
    </div>
</body>
</html>
