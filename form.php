<?php
include_once('processForm.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload de imagem de Perfil</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="up.css/style.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <a class="link" href="profiles.php">Visualizar todos os perfis</a>
        <br /><br />
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h1 class="logo">Php Corporation</h1>
          <h3 class="text-center mb-3 mt-3">Perfil do usuário</h3>

          <?php if (!empty($msg)) : ?>

            <div class="alert <?php echo $msg_class; ?>" role="alert">

              <?php echo $msg; ?>
            </div>

          <?php endif; ?>

          <div class="form-group text-center" style="position: relative;">
            <span class="img-div">
              <div class="text-center img-placeholder" onClick="triggerClick()">
                <h4>Upload imagem</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Imagem de perfil</label>
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea name="bio" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" id="btn">Salvar usuário</button>
            <br><br>
            <a id="btn" href="profiles.php">Voltar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script src="scripts.js"></script>