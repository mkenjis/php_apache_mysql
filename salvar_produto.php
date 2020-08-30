<?php include_once("conexao.php"); ?>

<?php
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco_unitario = $_POST['preco_unitario'];
  $fabricante = $_POST['fabricante'];

  if ($id) {
    $query = "update produto set nome = '{$nome}', descricao = '{$descricao}', preco_unitario = {$preco_unitario}, fabricante = '{$fabricante}' where id = $id";
  }
  else {
    $query = "insert into produto(nome,descricao,preco_unitario,fabricante,data_cadastro) values ('{$nome}', '{$descricao}', {$preco_unitario}, '{$fabricante}', now())";
  }
  
  $resultado = mysqli_query($conn, $query);
  
  mysqli_close($conn);
  
  header('Location: produtos.php');
?>
