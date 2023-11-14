<?php

session_start ();
require __DIR__ . "/inc/db.php";
require __DIR__ . "/templates/header.php";
require __DIR__ . "/inc/functions.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $user = login($_POST['email'], $_POST['password']);
    if ($user) {
        $_SESSION['id'] = $user['id'];
        $authOK = true;
    }
}
?>

<h1>Résultat de l'authentification</h1>
<?php
if (isset($authOK)) {
    header ('location: index.php');
}
else { ?>
    <p>Vous n'avez pas été reconnu(e)</p>
    <p><a href="login.php">Nouvel essai</p>
<?php } ?>