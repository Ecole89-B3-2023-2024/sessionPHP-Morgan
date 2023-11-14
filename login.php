<?php

require __DIR__ . "/templates/header.php";
?>
<fieldset>
    <legend>Connexion</legend>
    <form action="post_login.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Valider</button>
    </form>
</fieldset>

<style>
    form div {
        width: 100%;
        display: flex;
        /* justify-content: space-around; */
        margin-bottom: 0.5em;
    }

    label {
        width: 10%;
    }

    input {
        width: 70%;
    }
</style>

<?php
require __DIR__ . "/templates/footer.php";