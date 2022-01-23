<!--Fazer a alteração nos cadastros-->
<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_colaborador set nome= '$nome', cpf='$cpf', setor='$setor' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consultas.php");
endif;