<?php

include_once('../dd.php');
include_once('functions.php');

?>

<div style="max-width:500px;padding: 5px 15px 5px 15px;background-color:#4caf50;color:#fff">
    Números Sorteados:
    <?php foreach(sorteados() as $c): ?>
    <?= $c ?>, 
    <?php endforeach; ?>
</div> <br>

<?php lotofacil(); ?>
<br>
<?php lotofacil(); ?>
<br>
<?php lotofacil(); ?>
