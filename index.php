<?php
require_once './actions/db-connect.php';
require_once './includes/header.php';
include_once './includes/msg.php';
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
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $result = mysqli_query($connect, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['nome']?></td>
                    <td><?php echo $data['sobrenome']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['nascimento']?></td>
                    <td>
                        <a href="./edit.php?id=<?php echo $data['idcliente']?>" class="btn-floating blue" title="Editar" rel="next">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                    <td>
                        <a href="#modal<?php echo $data['idcliente']?>" class="btn-floating red modal-trigger" title="Deletar" rel="next">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                    <div id="modal<?php echo $data['idcliente']?>" class="modal">
                        <div class="modal-content">
                            <h4>Atenção !</h4>
                            <p>Tem certeza que deseja excluir esse cliente ?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="./actions/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $data['idcliente']?>">
                                <button type="submit" name="btn-delete" class="btn red">Excluir Cliente !</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php
                        }
                    } else {
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
        <a href="./add.php" class="btn" rel="next">Adicionar Cliente</a>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>