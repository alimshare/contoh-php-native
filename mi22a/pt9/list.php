<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="padding: 20px;">
    <h1>Daftar Menu</h1>
    <br>

    <?php
    $menu = [
        "Sushi", "Ramen", "Chicken Katsu", "Bento",
        "Udon", "Ocha"
    ];
    ?>

    <ul class="nav">
        <?php foreach ($menu as $m) : ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <?php echo $m ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


    <ul class="list-group" style="width:200px">

        <?php foreach ($menu as $m) : ?>
            <li class="list-group-item list-group-item-danger">
                <?= $m ?>
            </li>
        <?php endforeach; ?>

    </ul>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>