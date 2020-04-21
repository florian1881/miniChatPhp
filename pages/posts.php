<?php
// un tableau avec les titres des posts
$title= array('Mon 1er titre','Mon 2ème titre','Mon 3ème titre','Mon 4ème titre','Mon 5ème titre','Mon 6ème titre');
//img links path are targeted following where the page will be included 
            echo"
            <div class=\"container mt-2`\">
            <div class=\"row\">";
//la boucle pour la création de 6 posts de plus 
//les titres sont pris dans le tableau et insérés dans chaque posts
    for ($i=0; $i<6 ; $i++) { 

       echo" <div class=\"col-md-4 myCard\">
                <img src=\"img/fb.png\" alt=\"\">
                    <h1>$title[$i]</h1>  
                    <p class=\"text-justify\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione perferendis cum dolorum odit porro vero quam? Maxime assumenda quis dicta vitae quaerat perspiciatis officia esse cumque fugiat. Libero, officiis. Tenetur!</p>
                </div>";          
    }
    echo"
    </div>
    </div>";
    ?>