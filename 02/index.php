<?php

$constants = include __DIR__ . '/constants.php';

$images = $constants['images'];
$pathToImagesFolder = $constants['pathToImagesFolder'];
$urlToImagesFolder = $constants['urlToImagesFolder'];

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <title>Home Work 03.02</title>
</head>
<body>
<div class="container">
    <p></p>
    <div class="row">
        <?php
        foreach ($images as $id => $imageName) {
            ?>
            <?php echo PHP_EOL; ?>
            <div class="col"><?php echo PHP_EOL;
                $imagePath = $pathToImagesFolder . $imageName;
                $imageURL = $urlToImagesFolder . $imageName;
                ?>
                <a href="/02/image.php?id=<?php echo $id; ?>"><img
                            src="<?php echo $imageURL; ?>" <?php echo getimagesize($imagePath)[3]; ?>></a><?php echo PHP_EOL; ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
