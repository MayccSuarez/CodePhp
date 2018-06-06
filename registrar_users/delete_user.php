<?php
require_once 'connection.php';

$result = false;

if (!empty($_GET)){
    $idUser = $_GET['id'];

    $sql = 'DELETE FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);

    $result = $query->execute([
       'id' => $idUser
    ]);

    header('Location:user_list.php');
}

