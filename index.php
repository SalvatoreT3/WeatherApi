<?php
require 'getWeather.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Weather Scraping</title>
</head>

<body>
    <div class="container">
        <h1>
            What's The Weather?
        </h1>

        <form action="index.php">
            <div class="form-group">
                <label for="city">Enter the name of city</label>
                <input class="form-control" placeholder="Eg. London" value="<?= $city ?>" name="city" id="city" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
            <?php $class = ($weather ? 'success' : 'danger') ?>
            <div class="alert alert-<?= $class ?> ">
                <?= $weather ? $weather : $error ?>
            </div>
        </form>

    </div>

</body>

</html>