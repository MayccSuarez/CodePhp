<?php

require_once 'connection.php';

$userExist = false;

$primeraVezIngreso = true;

if(!empty($_POST)){
    $userName = $_POST['name'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE name = :name AND password = :password";
    $query = $pdo->prepare($sql);

    $query->execute([
       'name' => $userName,
       'password' => $password
    ]);

    $userExist = $query->fetch(PDO::FETCH_ASSOC);

    $primeraVezIngreso = false;
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
    <title>Login</title>
</head>

<body>

<section class="container">

    <div class="container">

        <h1>Login</h1>
        <a href="index.php">Home</a>

        <br> <br>

        <form action="login.php" method="post">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" required >
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
    </div>

</section>

<br>

<?php

    if(!$primeraVezIngreso){
        if ($userExist) {
            echo '<div class="alert alert-success">Ingresas al sistema!!!</div>';
        }else{
            echo '<div class="alert alert-success">Usuario o contraseña incorrecto!!!</div>';
        }
    }

?>


</body>

</html>