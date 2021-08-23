<!doctype html>
<html lang="pr-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
          
          <form action="cadastro_script.php" method="POST">
            <div class="from-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control" placeholder="Jorge Silva" name="nome" required>
            </div>

            <div class="from-group">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" placeholder="Rua Dom Pedro" name="endereco">
            </div>

            <div class="from-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" placeholder="4299999999" name="telefone">
            </div>

            <div class="from-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" placeholder="nome@mail.com" name="email">
            </div>

            <div class="from-group">
              <label for="data_nascimento">Data de Nascimento</label>
              <input type="date" class="form-control" name="data_nascimento">
            </div>

            <div class="from-group">
              <input type="submit" class="btn btn-success">
            </div>
          </form>

          <a href="index.php" class="btn btn-primary">INICIO</a>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>