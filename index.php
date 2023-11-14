<?php
require __DIR__ . "/inc/functions.php";
require __DIR__ . "/templates/header.php";
session_start();

if (isset($_SESSION['id'])) {
    $user = getUser($_SESSION['id']);
}


if (isset($user)) {
    echo "<h1>Bienvenue " . $user['firstname'] . " " . $user['lastname'] . "</h1>

    <h2>Ceci est la page d'accueil</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sint quasi laborum et ad? Porro ut rerum distinctio. Itaque voluptatibus animi, aperiam reiciendis culpa tempore labore totam quod eligendi perspiciatis cum ipsum quas, minima natus ex facilis sit dolor quaerat odit doloribus, recusandae laborum? Id dolor sint optio error perferendis sit voluptas a, nulla vitae, incidunt, architecto totam natus sapiente animi iusto? Repellat molestiae facere odit ipsum deleniti, mollitia consectetur? Ullam excepturi similique, et quos laboriosam cumque facere omnis esse nam tempora beatae corporis! Nemo sint, quia odio veniam, atque quisquam architecto aliquam corrupti, eveniet voluptas cumque. Quia, laboriosam eaque!</p>";
    echo "<h1>Accueil du site</h1>";
}
else { ?>
    <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
    <p><a href="login.php">Se connecter</a></p>
<?php }

require __DIR__ . "/templates/footer.php";