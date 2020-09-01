<?php require_once("conn/conexao.php"); ?>

<?php
  $id = $_GET["id"];
#  $id = '10';
  
  $query = "select id,nome,descricao,preco_unitario,fabricante from produto where id = $id";
  $resultado = mysqli_query($conn, $query);
  
  $linha = mysqli_fetch_array($resultado);
  $nome = $linha['nome'];
  $descricao = $linha['descricao'];
  $preco_unitario = $linha['preco_unitario'];
  $fabricante = $linha['fabricante'];

?>
<html>
  <head>
    <title>Form</title>
    <?php include_once('header.html') ?>
  </head>
  <body>
  <main>
  <h1>Cadastro de Produtos</h1>
  <form method="post" action="salvar_produto.php">
    <dl>
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
    <p>Nome:</p>
    <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" />
    <p>Descricao:</p>
    <input type="text" id="descricao" name="descricao" value="<?php echo $descricao ?>" />
    <p>Preco Unit:</p>
    <input type="text" id="preco_unitario" name="preco_unitario" value="<?php echo $preco_unitario ?>" />
    <p>Fabricante:</p>
    <input type="text" id="fabricante" name="fabricante" value="<?php echo $fabricante ?>" />
    <br>
    <p><input type="submit" value="Salvar" /></p>
    </dl>
  </form>
  </main>
  </body>
</html>

<?php
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>
