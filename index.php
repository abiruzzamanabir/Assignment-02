<?php
include_once('./devInfo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devs Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($devs as $dev) : ?>
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img class="card-img-top" style="height: 250px; width: auto;" src="<?php echo $dev['photo'] ?>">
                        <h6 class="card-title text-center"><?php echo $dev['age'] ?></h6>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dev['name'] ?></h5>
                            <h6 class="card-title"><?php echo $dev['skill'] ?></h6>
                            <p class="card-text text-justify"><?php echo $dev['desc'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>