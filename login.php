<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_login.css">
    <link rel="stylesheet" href="css/principal.css">
    <title>JLF - Explicadora</title>
</head>

<header>
</header>
<body>
    <div>
        <h1 class="logo">Php Corporation</h1><br>
        <h2>Login</h2><br>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input id="btn" type="submit" name="submit" value="Enviar"><br /><br />
            <button id="btn"><a href="home.php" style="text-decoration: none; color: white;">Voltar</a></button>
            <br><br>
            <button id="btn"><a href="index.php" style="text-decoration: none; color: white;">Voltar para página principal</a></button>
        </form>
    </div>
</body>

</html>