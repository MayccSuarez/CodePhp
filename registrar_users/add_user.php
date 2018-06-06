<?php

include_once 'connection.php';

$result = false;

if (!empty($_POST)){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users( name, password, email) 
            VALUES(:name, :password, :email)";

    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'password' => md5($password),
        'email' => $email
    ]);
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
    <title>Add user</title>
</head>

<body>

    <section class="container">

        <h1>Agregar usuario</h1>
        <a href="index.php">Home</a>

        <br> <br>

        <form action="add_user.php" method="post">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" required >
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
            <br>
            <input type="submit" value="Guardar">
        </form>
    </section>

    <br>
    <?php
        if ($result){
            echo "<div class='alert alert-success'>Usario registrado!!!</div>";
        }
    ?>

</body>

</html>
