<?php
require_once __DIR__ . '/Movies.php';
require_once __DIR__ . './genres.php';
require_once __DIR__ . '/Classes/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <select class="text-white m-5" name="" id="">
                        <?php foreach ($genres as $key => $value) { ?>
                        <option value=""><?php echo $value['genre'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 ">
                    <?php foreach ($Movies as $key => $value) {
                        $movie = new Movie($value['title'], $value['trama'], $value['color']);
                    ?>
                    <h1 style="background-color: <?php echo $movie->getColor(); ?>">
                        Titolo:
                        <?php echo $movie->getTitle(); ?>
                    </h1>
                    <p class="text-white">
                        Trama:
                        <?php echo $movie->getTrama(); ?>
                    </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>