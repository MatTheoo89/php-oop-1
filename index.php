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
        <?php foreach ($moviesList as $movie) :?>
        <div class="card m-2" style="width: 18rem;">
            <img src="<?php echo $movie->poster?>" class="card-img-top h-100" alt="<?php echo $movie->title?>">
            <div class="card-body">
                <h5 class="card-title fw-bold"><?php echo $movie->title?></h5>
                <span class="card-title">Genere: <?php echo $movie->genre?></span>
                <span class="card-title d-block">Durata: <?php echo $movie->duration?></span>
                <h5 class="card-title">Cast:</h5>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_1->name ?></span>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_1->role ?></span><br>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_2->name?></span>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_2->role?></span><br>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_3->name?></span>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_3->role?></span><br>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_4->name?></span>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_4->role?></span><br>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_5->name?></span>
                    <span class="card-title mb-3"><?php echo $movie->cast->actor_5->role?></span><br>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</body>
</html>
