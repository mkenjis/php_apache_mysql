<?php include_once("conexao.php") ?>

<?php
    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
 
?>
<html>
<head><head>
<body>
<?php
  $query = "select login from usuario where login = '{$login}'";
  $res   = mysqli_query($conn,$query);

  if ($res) {
    echo "Erro !!! Login já existente";

  } else {
    $query = "insert into usuario(nome, email, login, senha, data_cadastro) ";
    $query .= "values ('{$nome}','{$email}','{$login}','{$senha}', now())";

    # echo $query;
    $res = mysqli_query($conn,$query);

    if (! $res) {
      echo "Erro na insercao do usuario no banco";

    } else {
      echo "Insercao com sucesso";
      header("location: login.php");
    }
  }
?>
</body>
</html>

<?php
  mysqli_close($conn);
?>
