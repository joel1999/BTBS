<?php

/** @var mysqli $db */
include "include/connection.php";

$id=$_GET['editid'];
$sql="SELECT * FROM bestelling WHERE Id=$id";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$naam=$row['naam'];
$telefoonnummer=$row['telefoonnummer'];
$taco=$row['taco'];
$delivery=$row['delivery'];
$adres=$row['adres'];


if(isset($_POST['submit'])) {
    $naam=$row['naam'];
    $telefoonnummer=$row['telefoonnummer'];
    $taco=$row['taco'];
    $delivery=$row['delivery'];
    $adres=$row['adres'];

    $sql = "UPDATE bestelling SET naam='$naam',telefoonnummer='$telefoonnummer',taco='$taco',delivery='$delivery',adres='$adres' WHERE Id=$id";
    $result = mysqli_query($db, $sql);

    if ($result) {
        header('Location: admin_overzicht.php');
//        echo "upda succ";
    } else {
        die(mysqli_error($db));
    }
//Close connection
    mysqli_close($db);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Update</title>
</head>

<body>
<div class="container px-4">
    <h1 class="title mt-4">Update klant</h1>
    <form method="post">
        <div class="field">
            <label class="label">Naam</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="naam" name="naam" value=<?php echo "$naam"; ?> >
                </label>
            </div>
        </div>
        <div class="field">
            <label class="label">Telefoonnummer</label>
            <div class="control">
                <label>
                    <input class="input" type="tel" placeholder="telefoonnummer" name="telefoonnummer" value=<?php echo "$telefoonnummer"; ?>>
                </label>
            </div>
        </div>

        <div class="field">
            <label class="label">Taco</label>
            <div class="control">
                <label>
                    <input class="input" type="number" placeholder="taco" name="taco" value=<?php echo "$taco"; ?>>
                </label>
            </div>
        </div>

        <div class="field">
            <label class="label">Delivery</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="delivery" name="delivery" value=<?php echo "$delivery"; ?>>
                </label>
            </div>
        </div>

        <div class="field">
            <label class="label">Adres</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="adres" name="adres" value=<?php echo "$adres"; ?>>
                </label>
            </div>
        </div>

        <div class="control">
            <div class="control">
                <button class="button is-primary" name="submit" type="submit">Update</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>
