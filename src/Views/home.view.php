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
        <a class="showMore" href="/pokemon?id=<?= $pokemon->getId() ?>">Voir plus</a>
        <a class="updateBtn" href="/updatePokemon?id=<?= $pokemon->getId() ?>">Modifier</a>
        <form action="/deletePokemon" method="POST">
                        <input type="hidden" name="id" id="id" value="<?= $pokemon->getId() ?>">
                        <button type="submit" class="btn btn-danger m-1">Suprimer le Pokemon</button>
                    </form>
    </div>  
    <?php
      }
}
?>
</div>
<?php
require_once(__DIR__ . "/partials/footer.php");
?>