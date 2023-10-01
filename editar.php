<?php 
// colocando os dados nos inputs
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
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica | Editar contato</title>
</head>
<body>

     <h2>Editar contato</h2>
     <form action="salvarEditar.php" method="POST">
        <label for="name">Nome:</label>
        <input name="name" id="name" value=<?php  
        echo $name
        ?> type="text">
        <label for="phone">Telefone:</label>
        <input name="phone" id="phone" value=<?php
        echo $phone
        ?> type="text">
        <input type="hidden" name="id" id="id" value=<?php echo $id ?>>
         <button name="update" id="update" type="submit">Salvar</button>
     </form>
    <a href="index.php">Voltar</a>
    
</body>
</html>