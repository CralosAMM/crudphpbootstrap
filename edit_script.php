<!doctype html>
<html lang="pr-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Alteração de Cadastro</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
     <?php
     include "conexao.php";

      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $data_nascimento = $_POST['data_nascimento'];

      $sql = "UPDATE `pessoas` SET `nome` = '$nome',  `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento'
       WHERE cod_pessoa = $id";

      /*$sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento)
       VALUES ('".$nome."', '".$endereco."', '".$telefone."','".$email."','".$data_nascimento."');";*/

      if (mysqli_query($conn, $sql) ){
       mensagem ("$nome Alterado com sucesso!", 'success');
      } else{
       mensagem ("$nome não pode ser Alterado!!", 'danger');
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

       
     ?>

     <a href="index.php" class="btn btn-primary">INICIO</a>

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