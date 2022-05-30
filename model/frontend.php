<?php
function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

    return $req;
}

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

function dbConnect()
//supression du bloc try/catch le 21/05/2022
{
    //try
   //{
        $db = new PDO('mysql:host=localhost;dbname=testb;charset=utf8', 'root', '');
        return $db;
    }
    //catch(Exception $e)
    //{
        //die('Erreur : '.$e->getMessage());
    //}
//}

//fonction qui ajoute un commentaire en base le 20/05/2022
function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    var_dump($db);
    $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    var_dump($comments);
    $affectedLines = $comments->execute(array($postId, $author, $comment));
    //var_dump($affectedLines);
    //return $affectedLines;
}