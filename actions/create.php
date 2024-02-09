<?php
require_once './db-connect.php';

if (isset($_POST['btn-create'])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $last = mysqli_escape_string($connect, $_POST['last']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $birth = mysqli_escape_string($connect, $_POST['birth']);

    $name = mb_strtoupper($name);
    $last = mb_strtoupper($last);
    $email = mb_strtoupper($email);
    $datetime = new DateTime();
    $created_at = $datetime->format('Y-m-d H:i:s');
    
    $sql = "INSERT INTO clientes (nome, sobrenome, email, nascimento, created_at, updated_at) VALUES ('$name', '$last', '$email', '$birth', '$created_at', '$created_at')";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?erro');
    } 
}
?>