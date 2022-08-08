<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=shop; charset=utf8", "root", "");
} catch (Exception $e) {
    die ('Erreur :' .$e -> getMessage());
}

?>