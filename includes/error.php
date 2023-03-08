<?php 
if(count($errors) > 0); 
?>
<div class="error bg-danger">
<?php foreach($errors as $error): ?>
<p> <?php echo $error;?>
<?php endforeach ?>
</div>