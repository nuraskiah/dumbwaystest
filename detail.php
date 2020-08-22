<?php
    require 'functions.php';
    $id = $_GET["id"];
    $motor = query("SELECT * FROM motorcycle_tb WHERE id = $id");
    $bId = $motor[0]["brand_id"];
    $brand = query("SELECT * FROM brand_tb WHERE id = $bId");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DumbWays RMP</title>
</head>

<body>
    <main>
        <div class="container">
            <h1>RMP Motorcycle</h1>

            <div class="add-btn-wrapper">
                <a class="btn add" href="index.php">Back</a>
            </div>

            <div class="detail-container content">
                <img class="det" src="<?= $motor[0]["image"]; ?>">
                <h2>Specification</h2>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><?= $motor[0]["name"]; ?></td>
                    </tr>

                    <tr>
                        <td>Brand</td>
                        <td><?= $brand[0]["name"]; ?></td>
                    </tr>

                    <tr>
                        <td>Color</td>
                        <td><?= $motor[0]["color"]; ?></td>
                    </tr>

                    <tr>
                        <td>Specification</td>
                        <td><?= $motor[0]["specification"]; ?></td>
                    </tr>

                    <tr>
                        <td>Stock</td>
                        <td><?= $motor[0]["stock"]; ?></td>
                    </tr>
                </table>
            </div>
           
        </div>
    </main>
</body>
</html>