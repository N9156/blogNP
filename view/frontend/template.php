<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="icon" type="favicon.ico/images" href="public/images/N.ico" />
        <link href="public/css/style.css" rel="stylesheet" /> 
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
    </head>
        
    <body class="d-flex flex-column min-vh-100">
        <div class="container">

         <!-- Navigation -->
         <?php include_once('header.php'); ?>
        <?= $content ?>
        </div>

        <?php include_once('footer.php'); ?>
    </body>
</html>