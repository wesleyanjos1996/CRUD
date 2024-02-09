<?php
require_once './actions/db-connect.php';
require_once './includes/header.php';

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE idcliente = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
}
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <form action="./actions/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['idcliente']?>">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" value="<?php echo $data['nome']?>" autocomplete="additional-name">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="last" id="last" value="<?php echo $data['sobrenome']?>">
                <label for="last">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>" autocomplete="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="birth" id="birth" value="<?php echo $data['nascimento']?>">
                <label for="birth">Nascimento</label>
            </div>
            <button type="submit" class="btn" name="btn-edit">Atualizar</button>
            <a href="./index.php" class="btn blue">Clientes</a>
        </form>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>