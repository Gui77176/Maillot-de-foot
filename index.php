<?php 

require('controller/controller.php');
session_start();

/*index.php Est le routeur il va :
- Regarder quelle est la valeur du paramètre action
- Généralement il va aller chercher des données dans le model
- Et utiliser invoquer(appeler) une fonction du controller en lui passant des données (du model) si besoin
*/

try{
    if(isset($_GET['action']))
    {$action=test_input($_GET['action']);
        if($action == 'Accueil'){
            accueil();
        }
        else if ($action == 'Connexion'){
            connexion();
        }
        else if ($action == 'Inscription'){
            inscription();
       }
    
    else if ($action == 'Articles'){
        articles();
   }
   else if ($action == 'Panier'){
    panier();
}
else if ($action == 'Fiche-produit'){
    ficheProduit();
}
else if ($action == 'Nation'){
    nation();
}
else if ($action == 'Club'){
    club();
}

}
    
    else {
        accueil();
    }
}

catch(Exception $e){
    echo 'Erreur : ' . $e->getMessage();
}

//fonction qui vérifie si du code html  ou javascript a été inscrit (pour la sécurité)
function test_input($data){
    $data=urldecode($data);
    $data=trim($data);//enlève les espaces
    $data=stripslashes($data);//enlève les slashs
    $data=htmlspecialchars($data);//parser le code html
    return $data;
}
?>