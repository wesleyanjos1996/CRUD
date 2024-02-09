<?php
session_start();
require_once './db-connect.php';
require_once './clear.php';
if (isset($_POST['btn-create'])) {
    $name = clear($_POST['name']);
    $last = clear($_POST['last']);
    $email = clear($_POST['email']);
    $birth = clear($_POST['birth']);
    $name = mb_strtoupper($name);
    $last = mb_strtoupper($last);
    $email = mb_strtoupper($email);
    $datetime = new DateTime();
    $created_at = $datetime->format('Y-m-d H:i:s');
    $sql = "INSERT INTO clientes (nome, sobrenome, email, nascimento, created_at, updated_at) VALUES ('$name', '$last', '$email', '$birth', '$created_at', '$created_at')";
    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Cadastrado com ssucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao cadastrar!';
        header('Location: ../index.php');
    } 
}
?>