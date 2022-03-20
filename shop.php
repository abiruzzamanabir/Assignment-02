<?php
include_once('./shopDetails.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Phone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($shops as $shop) : ?>
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img class="card-img-top" style="height: 250px; width: auto;" src="<?php echo $shop['photo'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $shop['name'] ?></h6>
                            <h6 class="card-title"><?php echo $shop['amount'] ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>