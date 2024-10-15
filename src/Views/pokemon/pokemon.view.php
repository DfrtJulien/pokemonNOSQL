<?php
include_once(__DIR__ . '/../partials/head.php');
?>
<h1>Le pokémon</h1>
<?php
if (isset($myPokemon)) {
?>
    <div class="pokemon <?= $myPokemon->getType() ?>">
        <h2>Nom : <?= $myPokemon->getName() ?></h2>
        <h3>type : <?= $myPokemon->getType() ?></h3>
        <h3>Level : <?= $myPokemon->getLevel() ?></h3>
        <p>Description du Pokemon : <?= $myPokemon->getDescription() ?></p>
    </div>
<?php
}
?>
<?php
include_once(__DIR__ . '/../partials/footer.php');
?>