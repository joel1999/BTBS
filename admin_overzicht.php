<?php

if (!isset($_SESSION['loggedInUser'] )){
//    header("Location: Security/login.php");
}

/** @var mysqli $db */

//Require DB settings with connection variable
require_once "include/Connection.php";



?>
    <!doctype html>
    <html lang="en">
<head>
    <title>BTBS</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css">
</head>

<body>
<div class="container px-4">
    <h1 class="title mt-4">Klant overzicht</h1>
    <table class="table is-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Telefoon nr</th>
            <th>Taco's</th>
            <th>Delivery</th>
            <th>Adres</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sql="SELECT * from bestelling ";
        $result=mysqli_query($db,$sql);

        if ($result){
            while ($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $naam=$row['naam'];
                $telefoonnummer=$row['telefoonnummer'];
                $taco=$row['taco'];
                $delivery=$row['delivery'];
                $adres=$row['adres'];

                echo
                    '<tr>
                    <th scope ="row">'.$id.'</th>
                    <td>'.$naam.'</td>
                    <td>'.$telefoonnummer.'</td>
                    <td>'.$taco.'</td>
                    <td>'.$delivery.'</td>
                    <td>'.$adres.'</td>
                     <td>
                    <a href="detail.php?detailid='.$id.'"><i class="material-icons">visibility</i></a>
                    <a href="edit.php?editid='.$id.'"><i class="material-icons">edit</i></a>
                    <a href="delete.php?deleteid='.$id.'"><i class="material-icons">delete</i></a>
                     </td>
                 </tr>';
            }
        }
        ?>
        <tr>
            <td>
                <a href="create.php"><i class="material-icons">person_add</i></a>
            </td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="6" class="has-text-centered">&copy; Klanten</td>
        </tr>
        </tfoot>
    </table>
</div>
<a class="button" href="index.html">Terug</a>

</body>
    </html>
