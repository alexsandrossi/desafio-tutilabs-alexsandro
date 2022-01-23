<!--Listar os colaboradores que foram cadastrados-->
<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_colaborador");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $cpf = $registros['cpf'];
    $setor = $registros['setor'];

    echo "<tr>";
    echo "<td>$nome</td><td>$cpf</td><td>$setor</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
endwhile;
