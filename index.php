<?php
$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

$query = $db->query("SELECT * FROM lits");
$lits = $query->fetchAll();

include("tpl/header.php");

?>

<!DOCTYPE html>
<html lang="fr">


<main>

    <div class="addLit">
        <button>
            <a href="add_lit.php">Ajouter un lit</a>
        </button>
    </div>

    <div class="test">
        <?php
        foreach ($lits as $lit) {
        ?>
            <div class="item">
                <div class="img">
                    <img src="<?= $lit["image"] ?>" alt="">
                </div>
                <div class="brand">
                    <p><?= $lit["marque"] ?></p>
                </div>
                <div class="matelas">
                    <p><?= $lit["taille"] ?></p>
                </div>
                <div class="price">
                    <p class="promo"><?= $lit["prix"] . "€" ?></p>
                </div>
                <div class="btn-delete">
                    <button>
                        <a href="delete_lit.php?id=<?= $lit["id"] ?>">Supprimer ce lit</a>
                    </button>
                </div>
                <div class="btn-edit">
                    <button>
                        <a href="edit_lit.php?id=<?= $lit["id"] ?>">Editer ce lit</a>
                    </button>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</main>

</html>