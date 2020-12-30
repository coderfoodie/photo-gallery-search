<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery in PHP</title>
</head>
<body>
    
    <?php
        $image = $_GET['pics'];
        echo `<img src="bpic" alt='".$image."'>`;
    ?>

    <h1><a href="./index.php">Gallery</a></h1>
</body>
</html>