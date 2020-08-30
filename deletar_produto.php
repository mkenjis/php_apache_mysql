<?php include_once("conexao.php"); ?>

<?php
  $id = $_POST['id'];

  $query = "delete from produto where id = $id";
  
  $resultado = mysqli_query($conn, $query);
  
  mysqli_close($conn);
  
  header('Location: produtos.php');
?>
