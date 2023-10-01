<?php 
// editar e salvar os dados
include_once('conexao.php');

if (isset($_POST["update"])) {
  
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $id = $_POST["id"];
   
  $update = "UPDATE contatos set id = '$id', nome = '$name', telefone = '$phone' WHERE id = '$id'";

  $resultUpdate = $conexao->query($update);

  if($resultUpdate==true) {
    echo "<p>Contato editado com sucesso!</p>";
    echo "<a href='index.php'>Voltar</a>";
  } else {
    echo "<p> Erro ao editar contato.</p>";
    echo "<a href='index.php'>Voltar</a>";
  };
} else {
  echo '<p>Alguma coisa deu errado.</p>';
}
?>