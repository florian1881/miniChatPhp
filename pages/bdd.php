<?php
try
{
    $bdd = new PDO('mysql:host=sql307.hebergratuit.net;dbname=heber_25599695_article;charset=utf8','heber_25599695','5Lb2d10rQu');
    if ($bdd) {
        echo " connexion ok";
    }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table article
$reponse = $bdd->query('SELECT * FROM articles');


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<div class="col-md-4 myCard">
                <img src="<?php echo $donnees['img']; ?>" alt="">
                    <h1><?php echo $donnees['titre']; ?></h1> 
                    <p> <?php echo $donnees['by']; ?></p> 
                    <p class="text-justify"><?php echo $donnees['content']; ?></p>
                    <p><?php echo $donnees['date']; ?></p>
                </div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête


?>