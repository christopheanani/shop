<?php
include 'conn.php';


// preparation de la requete d'insertion
$req = $conn->prepare('INSERT INTO products (`name`, mass, `description`, price, stock, categorie) VALUES (?,?,?,?,?,?)');

// Excution de la requete preparee
$req->execute(array($_POST['name'], $_POST['mass'], $_POST['description'], $_POST['price'], $_POST['stock'], $_POST['category']));

header('Location: home.php');
?>