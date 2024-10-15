<?php
require_once(__DIR__ . "/partials/head.php");
?>
<h1>Bienvenue</h1>
<div class="pokemonContainer">
<?php
if(isset($arrayPokemons)){
    foreach($arrayPokemons as $pokemon){

  
    ?>
    <div class="pokemon <?= $pokemon->getType() ?>">
        <h2>Nom : <?= $pokemon->getName() ?></h2>
        <h3>type : <?= $pokemon->getType() ?></h3>
        <h3>Level : <?= $pokemon->getLevel() ?></h3>
        <p>Description du Pokemon : <?= $pokemon->getDescription() ?></p>
    </div>
   
    <?php
      }
}
?>
</div>
<?php
require_once(__DIR__ . "/partials/footer.php");
?>