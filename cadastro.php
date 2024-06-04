<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Aplicação PHP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cadastro.php">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h2 class="mt-5">Cadastro</h2>
      <form action="cadastro.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO cadUser (name, email, password, tipoUser) VALUES ('$name', '$email', '$password', 1)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>