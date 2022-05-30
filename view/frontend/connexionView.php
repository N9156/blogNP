<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>


<h1>Connectez-vous à mon blog</h1>
        <form action="submit_contact.php" method="post" enctype="multipart/form-data" >

        <!-- Ajout des champs email et message -->
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" id="Email" name="Email" aria-describedby="Email-help">

                

                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="motdepasse" class="form-control" id="motdepasse" name="motdepasse" aria-describedby="motdepasse-help">
                
            </div>
            
            
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
        <br />
        <p>Vous n'avez pas encore de compte ? </p><a href="index.php?action=inscription" >Créer mon compte</a>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>