<html>
<head>
  <title>Login</title>
  <?php include_once("header.html") ?>
</head>
<body>
  <main>
    <div id="login">
    <form action="salvar_usuario.php" method="post">
      <table>
      <tr><td><label>Nome: </label></td>
      <td><input type="text" id="nome" name="nome" placeholder="Nome"></td></tr>
      <tr><td><label>Email: </label></td>
      <td><input type="text" id="email" name="email" placeholder="Email"></td></tr>
      <tr><td><label>Login: </label></td>
      <td><input type="text" id="login" name="login" placeholder="Login"></td></tr>
      <tr><td><label>Senha: </label></td>
      <td><input type="password" id="senha" name="senha"></td></tr>
      </table>
      <input type="submit" value="Submit">
    </form> 
    </div>
  </main>
  <div id="footer">
    <h1>Copyright by Optima Consulting</h1>
  </div>
</body>
</html>
