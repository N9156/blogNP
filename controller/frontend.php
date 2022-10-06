<?php

require('model/frontend.php');

$loader = new \Twig\Loader\FilesystemLoader('.view/frontend/twig/');
$twig = new \Twig\Environment($loader);//le 19 07 2022


/**
 * La function listPosts liste les articles du blog
 *
 * @return void
 */
function listPosts()
{
    $posts = getPosts();

    //require('view/frontend/listPostsView.php');
    echo $twig->render('connexionView.twig', ['name' => 'Fabien']);
}


/**
 * post
 *
 * @return void
 */
function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view/frontend/postView.php');
}


/**
 * Contact
 *
 * @return void
 */
function contact()
{
    $nom= 
    require('view/frontend/contactView.php');
}


/**
 * Connexion
 *
 * @return void
 */
function connexion()
{
    require('view/frontend/connexionView.php');
}

/**
 * Inscription
 *
 * @return void
 */
function inscription()
{
    require('view/frontend/inscriptionView.php');
}

//fonction ajoute un commentaire en base le 20/05/2022 récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle
//gestion des erreurs le 21/05/2022
/**
 * addComment
 *
 * @param  mixed $postId
 * @param  mixed $author
 * @param  mixed $comment
 * @return void
 */
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


/**
 * Erreur
 *
 * @return void
 */
function erreur()
{
    require('view/errorView.php');
}