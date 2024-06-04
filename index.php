<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        padding-top: 3.5rem;
    background-color:#a7c2df; 
}

.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
}

h1 {
    margin-top: 60px;
    font-size: 2.5rem;
}

.form-label {
    font-weight: bold;
}

.container {
    max-width: 600px;
}

.btn-primary {
    background-color: #ddecc0;
    border-color: #a7c2df;
}
</style>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Aplicação PHP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container text-center">
      <h1 class="mt-5">🦋seja bem-vindo(a) marujos🦋</h1>
      <p class="lead">🌻VOCE ESTÁ NA PAGINA PRINCIPAL!</p>
    </div>
  </body>
</html>