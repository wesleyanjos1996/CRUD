<?php
require_once './includes/header.php'; 
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="./actions/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" autocomplete="additional-name">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="last" id="last">
                <label for="last">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" autocomplete="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="birth" id="birth">
                <label for="birth">Nascimento</label>
            </div>
            <button type="submit" class="btn" name="btn-create">Cadastrar</button>
            <a href="./index.php" class="btn blue">Clientes</a>
        </form>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>