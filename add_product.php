<?php
    require 'functions.php';
    $brands = query("SELECT * FROM brand_tb");
    if(isset($_POST["submit"])){
        if(addProduct($_POST) > 0) echo "
            <script>
                alert('Success!');
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
    <title>DumbWays RMP</title>
</head>

<body>
    <main>
        <div class="container">
            <h1>RMP Motorcycle</h1>

            <div class="add-btn-wrapper">
                <a class="btn add" href="index.php">Back</a>
            </div>

            <div class="add-form content">
                <form action="" method="post">
                    <div class="field">
                        <label for="name">Motorcycle Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="field">
                        <label for="brand">Brand</label>
                        <select name="brand" id="brand">
                            <?php foreach($brands as $brand) : ?>
                                <option value="<?= $brand["id"]; ?>"><?= $brand["name"]; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="field">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" required>
                    </div>

                    <div class="field">
                        <label for="color">Color</label>
                        <input type="text" name="color" id="color" required>
                    </div>

                    <div class="field">
                        <label for="specification">Specification</label>
                        <input type="text" name="specification" id="specification" required>
                    </div>

                    <div class="field">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" required>
                    </div>

                    <button type="submit" name="submit">Add</button>
                </form>
            </div>
           
        </div>
    </main>
</body>
</html>