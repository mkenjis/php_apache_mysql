<?php require_once("conn/conexao.php"); ?>

<?php
  $id = $_GET["id"];

  $query = "delete from produto where id = $id";
#  echo $query;
  $resultado = mysqli_query($conn, $query);
  
  mysqli_free_result($resultado);
  mysqli_close($conn);
  
  header("location: produtos.php");
?>
