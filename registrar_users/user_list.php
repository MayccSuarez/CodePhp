<?php

require_once 'connection.php';

$sql = "SELECT * FROM users";
$query = $pdo->query($sql);

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>User list</title>
</head>

<body>

<section class="container">

    <h1>Listado de usuarios</h1>
    <a href="index.php">Home</a>

    <br> <br>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <?php

                while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    echo '<td>' .$row['id'] .'</td>';
                    echo '<td>' .$row['name'] .'</td>';
                    echo '<td>' .$row['email'] .'</td>';
                    echo '<td> <a href="update_user.php?id='.$row['id'] .'">Edit</a>'.'</td>';
                    echo '<td> <a href="delete_user.php?id='.$row['id'] .'">Delete</a>'.'</td>';
                    echo '</tr>';
                }
            ?>

        </tr>
    </table>

</section>

<br>


</body>

</html>