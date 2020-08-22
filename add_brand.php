<?php
    require 'functions.php';
    if(isset($_POST["submit"])){
        if(addBrand($_POST) > 0) echo "
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
                        <label for="name">Brand Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <button type="submit" name="submit">Add</button>
                </form>
            </div>
           
        </div>
    </main>
</body>
</html>