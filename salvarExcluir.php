<?php 
// deletar os dados
include_once('conexao.php');

if (isset($_POST["delete"])) {
    $id = $_POST["id"];
    $delete = "DELETE FROM contatos WHERE id = $id";
    $resultDelete = $conexao->query($delete);
    if($resultDelete==true) {
        echo "<p> Contato excluído com sucesso!</p>";
        echo "<a href='index.php'>Voltar</a>";
    } else {
        echo "<p>Erro ao excluir ".$name .".</p>";
        echo "<a href='index.php'>Voltar</a>";
    }
}

?>