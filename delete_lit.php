<?php
$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

if (isset($_GET["id"])) {

    $query = $db->prepare("SELECT * FROM lits WHERE id = :id");
    $query->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $query->execute();
    $lit = $query->fetch();

    if($lit) {
        $data = $lit;
    }
    
    $query = $db->prepare("DELETE FROM lits WHERE id =:id");
    $query->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    // if ($query->execute()) {
    //     header("location: index.php");
    //     echo "Lit supprimé avec succès";
    // }
}

include('tpl/header.php');
?>


<div class="delete-item">
    <h1>Vous souhaitez supprimer ce lit : </h1>
    <p><?= $data["marque"] ?></p>
    <p><?= $data["taille"] ?></p>
    <p><?= $data["prix"] ?></p>
    <img src="<?= $lit["image"] ?>" alt="">
</div>
<div class="choice">
    <button type="submit">Je confirme la suppression !</button>
    <button><a href="index.php">Non surtout pas !</a></button>
</div>