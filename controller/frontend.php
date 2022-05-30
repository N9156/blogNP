<?php

require('model/frontend.php');

function listPosts()
{
    $posts = getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view/frontend/postView.php');
}
function contact()
{
    require('view/frontend/contactView.php');
}
function connexion()
{
    require('view/frontend/connexionView.php');
}
function inscription()
{
    require('view/frontend/inscriptionView.php');
}

//fonction ajoute un commentaire en base le 20/05/2022 récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle
//gestion des erreurs le 21/05/2022
function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        //die('Impossible d\'ajouter le commentaire !');le 21/05/2022
        // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        throw new Exception('Impossible d\'ajouter le commentaire !');

    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
function erreur()
{
    require('view/errorView.php');
}