<?php
require_once './includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wesley</td>
                    <td>Anjos</td>
                    <td>wesley@gmail.com</td>
                    <td>29/12/1996</td>
                    <td><a href="#" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                    <td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="./add.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
require_once './includes/footer.php';
?>