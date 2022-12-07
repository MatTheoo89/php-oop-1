<?php 
    include 'db.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Movies</title>

    <style>
        body{
            color: #39f;
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container d-flex">
        <?php foreach ($movies as $movie) :?>
        <div class="card m-2" style="width: 18rem;">
            <img src="<?php echo $movie->poster?>" class="card-img-top h-100" alt="<?php echo $movie->title?>">
            <div class="card-body">
                <h5 class="card-title fw-bold"><?php echo $movie->title?></h5>
                <span class="card-title"><?php echo $movie->genre?></span>
                <span class="card-title d-block"><?php echo $movie->duration?></span>
                <span class="card-title mb-3"><?php echo $movie->genre?></span>
                <h5 class="card-title">Cast:</h5>
                <?php foreach($movies->cast as $actor) : ?>
                <span class="card-title mb-3"><?php echo $actor?></span>
                <?php endforeach;?>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</body>
</html>