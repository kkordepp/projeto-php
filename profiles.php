<?php
$conn    = mysqli_connect("localhost", "root", "", "jlf_explicadora");
$results = mysqli_query($conn, "SELECT * FROM usuarios");
$users   = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Visualizar os uploads de Perfis</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="up.css/style.css">
</head>

<body>

  <div class="container">
    <!-- <div class="row">
      <div class="col-1 offset-md-1" style="margin-top: 30px;"> -->
    <br>
    <br>
    <table class="table table-bordered">
      <thead>
        <th>Imagem de Perfil</th>
        <th>Descrição</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Data de Nascimento</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Endereço</th>
      </thead>
      <tbody>

        <?php foreach ($users as $user) : ?>
          <tr>
            <td>

              <img src="<?php echo 'images/' . $user['profile_image']; ?> " width="90" height="90" alt="">
            </td>

            <td>
              <?php echo $user['bio']; ?>
            </td>

            <td>
              <?php echo $user['nome']; ?>
            </td>

            <td>
              <?php echo $user['email']; ?>
            </td>

            <td>
              <?php echo $user['telefone']; ?>
            </td>

            <td>
              <?php echo $user['sexo']; ?>
            </td>

            <td>
              <?php echo $user['data_nasc']; ?>
            </td>

            <td>
              <?php echo $user['cidade']; ?>
            </td>

            <td>
              <?php echo $user['estado']; ?>
            </td>

            <td>
              <?php echo $user['endereco']; ?>
            </td>
          </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
    <br /><br />
    <a id="btn" href="formulario.php">Novo perfil</a>
    <a id="btn" href="sistema.php">Voltar</a>
  </div>
  </div>
  </div>
</body>

</html>