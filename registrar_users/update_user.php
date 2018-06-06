<?php

include_once 'connection.php';

if (!empty($_GET)){
    $idUser = $_GET['id'];

    $sql = 'SELECT * FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);

    $query->execute([
        'id' => $idUser
    ]);

    $userData = $query->fetch(PDO::FETCH_ASSOC);

    $userName = $userData['name'];
    $userEmail = $userData['email'];
}

$result = false;

if (!empty($_POST)){
    $newNameUser = $_POST['name'];
    $newEmailUser = $_POST['email'];
    $idUser = $_POST['id'];

    $sql = 'UPDATE users SET name = :name, email = :email WHERE id = :id';
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $newNameUser,
        'email' => $newEmailUser,
        'id' => $idUser
    ]);

    $userName = $newNameUser;
    $userEmail = $newEmailUser;
}


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Update user</title>
</head>

<body>

<section class="container">

    <h1>Actualizar usuario</h1>
    <a href="user_list.php">Back</a>

    <br> <br>

    <form action="update_user.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" value="<?php echo $userName ?>">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $userEmail ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $idUser?>">
        <input type="submit" value="Actualizar">
    </form>
</section>

<br>

<?php
    if ($result){
        echo '<div class="alert alert-success">Datos actualizados</div>';
    }
?>

</body>

</html>
