<?php
session_start();
include 'conn.php';

$products = $conn-> prepare("SELECT products.id,products.name,products.description,products.mass,products.price,products.stock,categories.name AS categories FROM products JOIN categories ON (products.id_categorie = id_categorie) ") ;
$products -> execute();
$products = $products -> fetchAll();

// Create categories button
$categorie = $conn->prepare("SELECT * FROM categories");
$categorie->execute();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style.css">
     </head>

     <body>
          <div class="navBar">
               <div class="navBar-title">
                    <div class="logo">
                         <h2>Let's Shop</h2>
                    </div>
                    <div class="out">
                         <a href="create_product.php" class="creation">Create Product</a>
                         <a href="logout.php" class="logout-btn">Log Out</a>
                    </div>
               </div>
          </div>

          <h1 class="greeting">Hello, <?php echo $_SESSION['lastname']; ?> welcome to products page!</h1>

          <div class="product-categories">
               <?php
               $recups = $categorie->fetchAll();
               foreach ($recups as $recup) {
               ?>
                    <button class="product-Btn" type="submit"><a href="create_product.php"><?= $recup['name'] ?></a></button>
               <?php

               }
               ?>
          </div>
               <?php
                     $req = "SELECT id,`name`, mass, `description`, price, stock, categorie FROM products ORDER BY id ASC";
                     $res = $conn->query($req);
                     
                     if(!$res){
                         echo "Recuperation failed!";
                     }else{
                         $productsInsert = $res->rowCount();
               ?>

         
          <table>
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>DESCRIPTION</th>
                         <th>MASS</th>
                         <th>PRICE</th>
                         <th>STOCK</th>
                         <th>CATEGORIE</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    while ($line= $res->fetch(PDO::FETCH_NUM)) {
                         echo "<tr>";
                         foreach ($line as $value){
                              echo "<td>$value</td>";
                         }
                         echo "</tr>";
                    }
                    ?>
               </tbody>
          </table>
          <?php
          $res->closeCursor();
     }
     ?>


     </body>

     </html>

<?php
} else {
     header("Location: login.php");
     exit();
}
?>