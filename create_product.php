<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Products form</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="image-content">
            </div>
            <div class="form-content">

                <form action="traitement-product.php" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="message"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="line"></div>
                    <h2>Create Product</h2>
                    <div class="input-wraper">
                        <div class="lgroup">
                            <div>
                                <label>Name</label>
                            </div>
                            <div>
                                <input class="lg-input" type="text" name="name" id="name" placeholder="Product name">
                            </div>
                            <div>
                                <label>Price</label>
                            </div>
                            <div>
                                <input class="rg-input" type="number" name="price" id="price" placeholder="Product price">
                            </div>
                        </div>
                        <div class="rgroup">
                            <div>
                                <label>Mass</label>
                            </div>
                            <div>
                                <input class="lg-input" type="text" name="mass" id="mass" placeholder="Product mass">
                            </div>
                            <div>
                                <label>Stock</label>
                            </div>
                            <div>
                                <input class="rg-input" type="text" name="stock" id="stock" placeholder="Stock">
                            </div>
                        </div>
                    </div>
                    <div class="dgroup">
                        <div>
                            <label>Category</label>
                        </div>
                        <div>
                            <input type="text" name="category" id="category" placeholder="Category">
                        </div>
                        <div>
                            <label>Description</label>
                        </div>
                        <div>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="action-btn">
                        <div>
                            <button type="reset">Reset</button>
                        </div>
                        <div>
                            <button type="submit" name="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>