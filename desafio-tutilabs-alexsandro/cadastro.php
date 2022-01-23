<!--
Nome: Alexsandro Siqueira
Desafio TUTIPLAT

Tela de Cadastro-->    
  
<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>

<?php include_once 'includes/menu.inc.php'?>

    <!--Formulario de Cadastro-->        
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="imagens/avatar-2.png" alt="[imagem]" width="100"></legend>
                <h5 class="ligth center">Cadastro de Colaborador</h5>

                <?php
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                ?>

                <!--Campo nome-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                    <label for="nome">Nome do Colaborador</label>
                </div>

                <!--Campo CPF-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="number" name="nome" id="nome" maxlength="50" required >
                    <label for="cpf">CPF do Colaborador</label>
                </div>

                <!--Campo Setor do Colaborador-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">work</i>
                    <input type="text" name="nome" id="nome" maxlength="15" required>
                    <label for="setor">Setor do Colaborador</label>
                </div>

                <!--Botões-->
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="submit" value="limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>