<?php


if (!empty($_POST)) {
    $marque = trim(strip_tags($_POST["marque"]));
    $taille = trim(strip_tags($_POST["taille"]));
    $prix = trim(strip_tags($_POST["prix"]));
    $image = trim(strip_tags($_POST["image"]));

    $errors = [];
    if (empty($marque)) {
        $errors["marque"] = "Vous devez obligatoirement saisir une marque ! ";
    }

    if (empty($taille)) {
        $errors["taille"] = "Vous devez obligatoirement saisir une taille ! ";
    }

    if (!filter_var($image, FILTER_VALIDATE_URL)) {
        $errors["image"] = "L'url de l'image n'est pas valide";
    }

    if (!filter_var($prix)) {
        $errors["prix"] = "Vous devez obligatoirement saisir un prix";
    }

    if (empty($errors)) {
        $dsn = "mysql:host=localhost;dbname=literie3000";
        $db = new PDO($dsn, "root", "");

        $query = $db->prepare("INSERT INTO lits (marque, taille, prix, image) VALUES (:marque, :taille, :prix, :image)");
        $query->bindParam(":marque", $marque);
        $query->bindParam(":taille", $taille);
        $query->bindParam(":prix", $prix);
        $query->bindParam(":image", $image);
        $query->execute();
    }
}



include("tpl/header.php");
?>

<h1>Ajouter un lit </h1>

<form action="" method="post">
    <div class="form-group">
        <label for="inputMarque">Marque du lit :</label>
        <input type="text" name="marque" id="inputMarque" value="<?= isset($marque) ? $marque : "" ?>">
        <?php
        if (isset($errors["marque"])) {
            echo "<span class=\"info-error\">{$errors["marque"]}</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label for="inputTaille">Dimensions du lit:</label>
        <input type="text" name="taille" id="inputTaille" value="<?= isset($taille) ? $taille : "" ?>">
        <?php
        if (isset($errors["taille"])) {
            echo "<span class=\"info-error\">{$errors["taille"]}</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label for="inputPrix">Prix du lit :</label>
        <input type="text" name="prix" id="inputPrix" value="<?= isset($prix) ? $prix : "" ?>">
        <?php
        if (isset($errors["prix"])) {
            echo "<span class=\"info-error\">{$errors["prix"]}</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label for="inputImage">URL de l'image du lit :</label>
        <input type="text" name="image" id="inputImage" value="<?= isset($image) ? $image : "" ?>">
        <?php
        if (isset($errors["image"])) {
            echo "<span class=\"info-error\">{$errors["image"]}</span>";
        }
        ?>
    </div>

    <input class="btn-add-lit" type="submit" value="Ajouter le lit">
</form>