<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    
    <?php
        $files = glob("./img/*");

        foreach ($files as $filename) {
            echo "<div><img src='".$filename."'></div><br>";
        }
    ?>

</body>
</html>