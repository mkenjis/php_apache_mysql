<?php require_once("sessao.php") ?>

<?php require_once("conn/conexao.php"); ?>

<?php
  $id = $_GET["id"];
#  $id = '10';
  
  $query = "select id,nome,descricao,preco_unitario,fabricante ";
  $query .= "from produto where id = {$id}";

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
  <div id="login">
  <form method="post" action="salvar_produto.php">
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>" >
    <table style="border:1px solid gray;margin-left:auto;margin-right:auto; background-color: linen;">
    <tr><td colspan="2"><h1>Cadastro de Produtos</h1></td></tr>
    <tr><td><label>Nome:<label></td>
    <td><input type="text" id="nome" name="nome" value="<?php echo $nome ?>"></td></tr>
    <tr><td><label>Descricao:<label></td>
    <td><input type="text" id="descricao" name="descricao" value="<?php echo $descricao ?>"></td></tr>
    <tr><td><label>Preco Unit:</label></td>
    <td><input type="text" id="preco_unitario" name="preco_unitario" value="<?php echo $preco_unitario ?>"></td></tr>
    <tr><td><label>Fabricante:</label></td>
    <td><input type="text" id="fabricante" name="fabricante" value="<?php echo $fabricante ?>"></td></tr>
    <tr><td><input type="submit" value="Salvar" /></td>
    <td><input type="submit" value="Cancelar" /></td></tr>
    </table>
  </form>
  </div>
  </main>
  <div id="footer">
    <h1>Copyright by Optima Consulting</h1>
  </div>
  </body>
</html>

<?php
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>
