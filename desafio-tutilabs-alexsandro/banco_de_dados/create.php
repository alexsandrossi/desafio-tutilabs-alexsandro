<!--Processar os dados que estão sendo preenchidos no formulario-->
<?php
session_start();
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select cpf from tb_colaborador");
$array_cpfs = [];

while($cpfs = $querySelect->fetch_assoc()):
    $cpfs_existentes = $cpfs['cpf'];
    array_push($array_cpfs, $cpfs_existentes);
endwhile;

if(in_array($cpf, $array_cpfs)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe colaborador com o CPF cadastrado'."</p>";
    header("Location:../");

else:
    $queryInsert = $link->query("insert into tb_colaborador values(default,'$nome','$cpf','$setor')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class = 'center green-text'>".'Cadastro do Colaborador efetuado com sucesso!'."</p>";
        header("Location:../");
    endif;

endif;