<?php

$images = [1 => 'image_1.jpg', 'image_2.jpg', 'image_3.jpg',];
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
    <div class="row">
        <!--        <div class="col">-->
        <!--            <a href="/02/image.php?id=1"><img src="/02/img/image_1.jpg" width="1920" height="1200"></a>-->
        <!--        </div>-->
        <?php
        foreach ($images as $id => $imageName) {
            ?>
            <?php echo PHP_EOL; ?>
            <div class="col"><?php echo PHP_EOL; ?>
            <a href="/02/image.php?id=<?php echo $id; ?>"><img src="/02/img/<?php echo $imageName; ?>" <?php echo ''; ?>></a><?php echo PHP_EOL; ?>
            </div><?php
        }
        ?>
    </div>
</div>
</body>
</html>
