<?php 
// envio dos dados
include_once('conexao.php');

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
  
    if (!$name || !$phone) {
        echo "<p> Dados inválidos </p>";
    } else {       
       
       $result = mysqli_query($conexao, "INSERT INTO contatos(nome,telefone) VALUES ('$name', '$phone')");
       
       if($result == true) {
        echo "Contato adicionado com sucesso!";
      } else {
        echo "Erro ao adicionar novo contato.";
      }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica | Adicionar novo contato</title>
</head>
<body>

     <h2>Adicionar novo contato</h2>
     <form method="POST">
        <label for="name">Nome:</label>
        <input name="name" id="name" type="text">
        <label for="phone">Telefone:</label>
        <input name="phone" id="phone" type="text">
         <button name="submit" id="submit" type="submit" >Adicionar novo contato</button>
     </form>
    <a href="index.php">Voltar</a>
    
</body>
</html>