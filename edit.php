<?php
include_once('config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
        /*  print_r($nome); */
    } else {
        header('Location: sistema.php');
    }
} else {
    header('Location: sistema.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="up.css/style.css">
    <title>JLF - Explicadora </title>

</head>

<body>
    <nav>
        <div id="navbar-container">
            <h1 class="logo">JLF Explicadora</h1>
        </div>
    </nav>

    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b class="logo2">Edição de Cadastro</b></legend>
                <form action="form.php" method="post" enctype="multipart/form-data">
                    <h1 class="logo">JLF Explicadora</h1>
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
                        <h3>Imagem de perfil</h3>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label><br>
                        <textarea name="bio" class="form-control"></textarea>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome; ?> required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" value=<?php echo $senha; ?> required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email; ?> required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone; ?> required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''; ?> required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''; ?> required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ''; ?> required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc; ?> required>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade; ?> required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado; ?> required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco; ?> required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                    <input type="submit" name="update" id="submit"><br /><br />
                    <button id="submit"><a href="sistema.php" style="text-decoration: none; color: white;">Voltar</a></button>
            </fieldset>
        </form>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
<script src="scripts.js"></script>