<?php

$constants = include __DIR__ . '/constants.php';

$images = $constants['images'];
$pathToImagesFolder = $constants['pathToImagesFolder'];
$urlToImagesFolder = $constants['urlToImagesFolder'];

if (isset($_GET['id'])) {
    if (isset($images[$_GET['id']])) {
        $imageName = $images[$_GET['id']];
        $imagePath = $pathToImagesFolder . $imageName;
        $imageURL = $urlToImagesFolder . $imageName;
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Image</title>
        </head>
        <body>
        <img src="<?php echo $imageURL; ?>" <?php echo getimagesize($imagePath)[3]; ?>>
        </body>
        </html>
        <?php
    }
}