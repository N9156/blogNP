<?php
//ajout du try catch exception
require('controller/frontend.php');

try{//on essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                //echo 'Erreur : aucun identifiant de billet envoyé'; le 21/05/2022
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'contact') {
                contact();
            }
        elseif ($_GET['action'] == 'connexion') {
                connexion();
            }
        elseif ($_GET['action'] == 'inscription') {
                inscription();
            }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    //echo 'Erreur : tous les champs ne sont pas remplis !';le 21/05/2022
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                    
                }
            }
            else {
                //echo 'Erreur : aucun identifiant de billet envoyé';le 21/05/2022
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'erreur') {
            erreur();
        }


    }
    else {
        listPosts();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    //echo 'Erreur : ' . $e->getMessage();
    $errorMessage = $e->getMessage();
   
    require('view/frontend/errorView.php');
    
}
