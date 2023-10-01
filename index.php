<?php 
    // selecionando os dados para exibir na tela
    include_once('conexao.php');
    $sql = "SELECT * FROM contatos ORDER BY nome ASC";
    $result = $conexao->query($sql);   
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
</head>
<body>
    
    <h1" >Agenda Telefônica</h1>
    <table>
        <thead>
            <tr>
                <th colspan="1">
                    Nome
                </th>
                <th colspan="1">
                    Telefone
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // exibindo na tela
            while ($contacts = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$contacts['nome']."</td>";
                echo "<td>".$contacts['telefone']."</td>";
                echo "<td><a href='editar.php?id=$contacts[id]'>Editar</a></td>";
                echo "<td><a href='excluir.php?id=$contacts[id]'>Excluir</a></td>";
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table>
    <a href="adicionar.php">Adicionar novo contato</a>

    
    
</body>
</html>

