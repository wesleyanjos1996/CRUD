<?php
session_start();
require_once './db-connect.php';
if (isset($_POST['btn-delete'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "DELETE FROM clientes WHERE idcliente = '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Excluido com ssucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao excluir!';
        header('Location: ../index.php');
    }   
}
?>