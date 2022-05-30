
<?php $title = 'Erreur'; ?>
<?php ob_start(); ?>

<?php echo $errorMessage; ?>




        
<br />
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>





