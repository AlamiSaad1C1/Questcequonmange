<?php

include("config/bd.php");
include("config/actions.php");
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

?>
    <!DOCTYPE html>
    <html lang="fr">

    <body>

        <?php

			 // Quelle est l'action à faire ?
			if (isset($_GET["action"])) {
                $action = $_GET["action"];
            } else {
                $action = "accueil";
            }		

            // Est ce que cette action existe dans la liste des actions
            if (array_key_exists($action, $listeDesActions) == false) {
                include("vues/404.php"); // NON : page 404
            } else {
                include($listeDesActions[$action]); // Oui, on la charge
            }

            ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
            ?>


    </body>

    </html>