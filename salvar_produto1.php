<?php require_once("conn/conexao.php"); ?>

<?php
  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];
  $preco_unitario = $_POST["preco_unitario"];
  $fabricante = $_POST["fabricante"];

#  print_r($_FILES["imagem_arq"]);
#  echo "Mostrando o conteúdo\n";
#  readfile($_FILES["imagem_arq"]['tmp_name']);

  $tmp_dir = $_FILES["imagem_arq"]["tmp_name"];
  $file    = $_FILES["imagem_arq"]["name"];
  $folder  = "images";
  $tgt_dir = $folder . "/" . $file;
#  echo $tgt_dir;

  $resultado = move_uploaded_file($tmp_dir, $tgt_dir);

  if (!resultado) {
    echo "Erro ao carregar arquivo imagem";
    header("location: produtos.php");
  }


  if ($id) {
    $query = "update produto set nome = '{$nome}', descricao = '{$descricao}', preco_unitario = {$preco_unitario}, fabricante = '{$fabricante}', imagem_arq = '{$tgt_dir}' where id = $id";
  }
  else {
    $query = "insert into produto(nome,descricao,preco_unitario,fabricante,imagem_arq,data_cadastro) values ('{$nome}', '{$descricao}', {$preco_unitario}, '{$fabricante}', '{$tgt_dir}', now())";
  }
  echo $query;  
  $res = mysqli_query($conn, $query);
  echo $res;  

  if (! $res) {
        echo "Erro na insercao do produto no banco";
        echo mysqli_error($conn);
        die();
#  } else {
#        header("location: login1.php");
  }

  mysqli_free_result($res);
  
  mysqli_close($conn);

  header("Location: produtos.php");
?>
