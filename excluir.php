<?php 
// verificação de exclusão

include_once('conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM contatos WHERE id = $id";
    $resultSelect = $conexao->query($select);
    if($resultSelect->num_rows > 0){
      while($data = mysqli_fetch_assoc($resultSelect)) {
        $name = $data['nome'];
        $phone = $data['telefone'];
      }
    }

    if (isset($_POST["delete"])) {
        $delete = "DELETE FROM contatos WHERE id = $id";
        $resultDelete = $conexao->query($delete);
        if($resultDelete==true) {
            echo "<p> Contato excluído com sucesso!</p>";
        } else {
            echo "<p>Erro ao excluir ".$name .".</p>";
        }
    }
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica | Excluir contato</title>
</head>
<body>
    <form action="salvarExcluir.php" method="POST">
    <p>Tem certeza que deseja excluir <strong><?php echo $name ?></strong>  da sua lista de contatos?</p>
    <input type="hidden" name="id" id="id" value=<?php echo $id ?>>
    <button name="delete" id="delete" type="submit">Sim, excluir</button>
    </form>

    <a href="index.php">Não, voltar</a>
</body>
</html>