<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery in PHP</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="gallery">
        <?php
            $files = glob("./img/*");

            foreach ($files as $filename) {
                echo `<a href='gallery.php?img=".$filename."'>
                <img class="pics" src='".$filename."' alt="" /></a>`;
            }
        ?>
    </div>

</body>
</html>