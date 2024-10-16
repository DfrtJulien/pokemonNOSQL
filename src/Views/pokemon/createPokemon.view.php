<?php
require_once(__DIR__ . "/../partials/head.php");
?>
<section class="addPokemonSection">


    <div class="formContainer">
        <h1>Ajouter un Pokemon</h1>
        <form method="POST">
            <div>
                <div class="flex">
                    <label for="name">Nom du Pokémon</label>
                    <img src="/public/img/800px-Carapuce-RFVF.png" alt="carapuse" class="logo">
                </div>
                <input type="text" name="name">
                <?php if (isset($this->arrayError['name'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['name'] ?></p>
                <?php
                } ?>
            </div>
            <div>
                <div class="flex">
                    <label for="type">Type du Pokémon</label>
                    <div class="flex">
                        <img src="/public/img/Pokémon_Water_Type_Icon.svg.png" alt="type eau" class="logo">
                        <img src="/public/img/images.jpg" alt="type feu" class="logo">
                        <img src="/public/img/Pokémon_Poison_Type_Icon.svg.png" alt="type poison" class="logo">
                    </div>
                </div>
                <select name="type" id="">
                    <option value="eau">eau</option>
                    <option value="feu">feu</option>
                    <option value="electrique">electrique</option>
                    <option value="glace">glace</option>
                    <option value="fee">fée</option>
                    <option value="psy">psy</option>
                    <option value="sol">sol</option>
                    <option value="poison">poison</option>
                    <option value="plante">plante</option>
                    <option value="dragon">dragon</option>
                    <option value="insect">insect</option>
                </select>
                <?php if (isset($this->arrayError['type'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['type'] ?></p>
                <?php
                } ?>
            </div>
            <div>
                <div class="flex">
                    <label for="level">Lvl du Pokémon</label>
                    <img src="/public/img/level.png" alt="level ball" class="logo">
                </div>
                <input type="number" name="level">
                <?php if (isset($this->arrayError['level'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['level'] ?></p>
                <?php
                } ?>
            </div>
            <div>
                <div class="flex">
                    <label for="description">Descirption du pokémon</label>
                    <img src="/public/img/pokedex.png" alt="pokedex" class="logo">
                </div>

                <textarea type="text" name="description">
        <?php if (isset($this->arrayError['description'])) {
        ?>
                    <p class='text-danger'><?= $this->arrayError['description'] ?></p>
                <?php
            } ?>
        </textarea>
            </div>
            <button type="submit" class="addPokemonBtn">Ajoutez</button>
        </form>
    </div>
</section>
<?php
require_once(__DIR__ . "/../partials/footer.php");
?>