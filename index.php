<?php
    require 'functions.php';
    $motors = query("SELECT * FROM motorcycle_tb");

    if(isset($_GET["buy"])){
        if(buy($_GET) > 0) echo "
            <script>
                alert('Success!');
                document.location.href = 'index.php';
            </script>
        ";
        else echo "
            <script>
                alert('Error!')
            </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RMP Motorcycle</title>
</head>

<body>
    <main>
        <div class="container">
            <h1>RMP Motorcycle</h1>
            <div class="add-btn-wrapper">
                <a class="btn add" href="add_customer.php">Add Customer</a>
                <a class="btn add" href="add_product.php">Add Product</a>
                <a class="btn add" href="add_brand.php">Add Brand</a>
            </div>

            <div class="products content">
                <?php foreach($motors as $motor) : ?>
                    <div class="motor">
                        <img src="<?= $motor["image"]; ?>">
                        <h2><?= $motor["name"]; ?></h2>
                        <a href="?buy=<?= $motor["id"]; ?>" class="btn buy" name="buy" onclick="return confirm('Do you want to buy this motorcycle?');">Buy</a>
                        <a href="detail.php?id=<?= $motor["id"]; ?>" class="btn detail">See Details</a>
                    </div>
                <?php endforeach ?>
            </div>

           
        </div>
    </main>
</body>
</html>