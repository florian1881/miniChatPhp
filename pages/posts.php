<?php
// un tableau avec les titres des posts
$title= array('Facebook','Instagram ','Pinterest','Snapchat','Twitter','WhatsApp');
$content= array(
    'Facebook est fondé en 2004 par Mark Zuckerberg et ses camarades de l\'université Harvard, Chris Hughes, Eduardo Saverin, Andrew McCollum et Dustin Moskovitz. D\'abord réservé aux étudiants de cette université, il s\'est ensuite ouvert à d\'autres universités américaines avant de devenir accessible à tous en septembre 2006. Le nom du site provient des albums photo (« trombinoscopes » ou « facebooks » en anglais) regroupant les photos des visages de tous les élèves prises en début d\'année universitaire.',
    
    'Instagram [ˈɪnstəɡɹæm]2 est une application, un réseau social et un service de partage de photos et de vidéos fondés et lancés en octobre 2010 par l\'Américain Kevin Systrom3 et le Brésilien Michel Mike Krieger. Depuis 2012, l\'application appartient à Facebook, elle est disponible sur plates-formes mobiles de type iOS, Android et Windows Phone et également sur ordinateurs avec des fonctionnalités réduites. L\'âge minimum requis pour utiliser Instagram est de 13 ans4.',
    
    'Pinterest est un site web américain mélangeant les concepts de réseautage social et de partage de photographies, lancé en 2010 par Paul Sciarra (en), Evan Sharp (en) et Ben Silbermann (en). Il permet à ses utilisateurs de partager leurs centres d\'intérêt et passions à travers des albums de photographies glanées sur Internet. Le nom du site est un mot-valise des mots anglais pin et interest signifiant respectivement « épingle » et « intérêt ».',
    
    'Snapchat (ou Snap dans le langage courant) est une application gratuite de partage de photos et de vidéos de la société Snap Inc., disponible sur plateformes mobiles iOS et Android. Elle a été conçue et développée par des étudiants de l\'université Stanford en Californie. L\'âge requis pour télécharger et utiliser cette application est fixé à 13 ans1,2.',
    
    'Twitter [ˈtwɪt̮ər]2 (litt. « gazouillis » en anglais) est un réseau social de microblogage géré par l\'entreprise Twitter Inc. Il permet à un utilisateur d’envoyer gratuitement de brefs messages, appelés tweets, sur internet, par messagerie instantanée ou par SMS. Ces messages sont limités à 280 caractères (140 caractères jusqu\'en novembre 2017).',
    
    'WhatsApp (ou WhatsApp Messenger) est une application mobile multiplateforme qui fournit un système de messagerie instantanée chiffrée de bout en bout aussi bien par Internet que par les réseaux mobiles.');

    $img= array('fb.png','inst.png','pin.png','sc.png','tw.png','wa.png');

//img links path are targeted following where the page will be included 
            echo"
            <div class=\"container mt-2`\">
            <div class=\"row\">";
//la boucle pour la création de 6 posts de plus 
//les titres sont pris dans le tableau et insérés dans chaque posts
    for ($i=0; $i<6 ; $i++) { 

       echo" <div class=\"col-md-4 myCard\">
                <img src=\"img/$img[$i]\" alt=\"\">
                <br>
                    <h1>$title[$i]</h1>  
                    <p class=\"text-justify\">$content[$i]</p>
                </div>";          
    }
    echo"
    </div>
    </div>";
    ?>