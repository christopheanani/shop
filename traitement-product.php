<?php
include 'conn.php';


// preparation de la requete d'insertion

$req = $conn->prepare('INSERT INTO products (`name`, mass, `description`, price, stock, categorie) VALUES (?,?,?,?,?,?)');
// Excution de la requete preparee

$req->execute(array($_POST['name'], $_POST['mass'], $_POST['description'], $_POST['price'], $_POST['stock'], $_POST['category']));

header('Location: home.php');
?>




















// preparation de la requete d'insertion
// $pdoStat = $conn->prepare('INSERT INTO products (`name`, mass, `description`, price, stock, categorie, created_at, updated_at) VALUES (:`name`, :mass, :`description`, :price, :stock, :category, :NOW(), :NOW()');

// Lier les valeur aux valeurs du formulaire

// $pdoStat->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
// $pdoStat->bindValue(':mass', $_POST['mass'], PDO::PARAM_STR);
// $pdoStat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
// $pdoStat->bindValue(':price', $_POST['price'], PDO::PARAM_STR);
// $pdoStat->bindValue(':stock', $_POST['stock'], PDO::PARAM_STR);
// $pdoStat->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

// Excution de la requete preparee

// $insertionIsOk = $pdoStat->execute();

// if ($insertionIsOk) {
// header("Location: traitement-product.php?error=Product added successfully");
// exit();
// } else {
// header("Location: traitement-product.php?error=Insertion failed");
// exit();
// }