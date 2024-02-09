<?php
session_start();
require_once './db-connect.php';
require_once './clear.php';

if (isset($_POST['btn-edit'])) {
    $name = clear($_POST['name']);   
    $last = clear($_POST['last']);
    $email = clear($_POST['email']);
    $birth = clear($_POST['birth']);
    $id = clear($_POST['id']);
    $name = mb_strtoupper($name);
    $last = mb_strtoupper($last);
    $email = mb_strtoupper($email);
    $datetime = new DateTime();
    $created_at = $datetime->format('Y-m-d H:i:s');
    $sql = "UPDATE clientes SET nome = '$name', sobrenome = '$last', email = '$email', nascimento = '$birth', updated_at = '$created_at' WHERE idcliente = '$id'";
    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Atualizado com ssucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao atualizar!';
        header('Location: ../index.php');
    }   
}
?>