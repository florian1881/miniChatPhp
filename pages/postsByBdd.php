<?php
//http://www.fpdev.hebergratuit.net/
//http://cpanel.hebergratuit.net/index.php
$host="sql307.hebergratuit.net";
$dbname="heber_25599695_article";
$charset="utf8";
$login="heber_25599695";
$pwd="5Lb2d10rQu";

// Mot de passe en clair mais base de donnée non utilisée et aucune données sensibles sur cette base. 

//to do : insert value in pdo request 

try
{
    $bdd = new PDO('mysql:host=sql307.hebergratuit.net;dbname=heber_25599695_article;charset=utf8','heber_25599695','5Lb2d10rQu');
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
                <img src="img/<?php echo $donnees['img']; ?>" alt="">
                <br>
                    <h1><?php echo $donnees['titre']; ?></h1> 
                    <p> <?php echo $donnees['by']; ?></p> 
                    <?php echo $donnees['content']; ?>
                    <p><?php echo $donnees['date']; ?></p>
                </div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête


?>
