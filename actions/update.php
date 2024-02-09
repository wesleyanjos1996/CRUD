<?php
session_start();
require_once './db-connect.php';
if (isset($_POST['btn-edit'])) 
{
    $name = mysqli_escape_string($connect, $_POST['name']);   
    $last = mysqli_escape_string($connect, $_POST['last']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $birth = mysqli_escape_string($connect, $_POST['birth']);
    $id = mysqli_escape_string($connect, $_POST['id']);
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