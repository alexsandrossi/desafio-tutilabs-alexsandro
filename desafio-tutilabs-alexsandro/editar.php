<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';

?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição do Colaborador</h5><hr>
    </div>
</div>
<?php
include_once 'banco_de_dados/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("select * from tb_colaborador where id='$id'");

while($registros = $querySelect->fetch_assoc()):

$nome = $registros['nome'];
$cpf = $registros['cpf'];
$setor = $registros['setor'];
endwhile;    
?>

<!--Formulario de Cadastro-->        
<div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="imagens/avatar-2.png" alt="[imagem]" width="100"></legend>
                <h5 class="ligth center">Alteração</h5>

                <?php
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                ?>

                <!--Campo nome-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                    <label for="nome">Nome do Colaborador</label>
                </div>

                <!--Campo CPF-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="number" name="nome" id="nome" value="<?php echo $cpf ?>" maxlength="50" required >
                    <label for="cpf">CPF do Colaborador</label>
                </div>

                <!--Campo Setor do Colaborador-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">work</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $setor ?>" maxlength="15" required>
                    <label for="setor">Setor do Colaborador</label>
                </div>

                <!--Botões-->
                <div class="input-field col s12">
                    <input type="submit" value="alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>