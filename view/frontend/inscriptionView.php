<?php $title = 'Inscription'; ?>
<?php ob_start(); ?>


<h1>Créez votre compte</h1>
        <form action="submit_contact.php" method="post" enctype="multipart/form-data" >

        <!-- Ajout des champs email et message -->
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" id="Email" name="Email" aria-describedby="Email-help">

                

                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="motdepasse" class="form-control" id="motdepasse" name="motdepasse" aria-describedby="motdepasse-help">
                
            </div>
            
            
            <button type="submit" class="btn btn-primary">Je m'inscris</button>
        </form>
        <br />
        <p>Vous posséder déjà un compte ? </p><a href="index.php?action=connexion" >Connectez-vous</a>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>