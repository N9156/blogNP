<?php $title = 'Contact'; ?>
<?php ob_start(); ?>
<h1>Front-end Web Developer </h1>

<h1>Contactez moi</h1>
        <form action="submit_contact.php" method="post" enctype="multipart/form-data" >

        <!-- Ajout des champs email et message -->
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="Nom" class="form-control" id="Nom" name="Nom" aria-describedby="Nom-help">

                <label for="Prénom" class="form-label">Prénom</label>
                <input type="Prénom" class="form-control" id="Prénom" name="Prénom" aria-describedby="Prénom-help">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>