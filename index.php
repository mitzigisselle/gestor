<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <img src="img/logo.png" id="icon" alt="User Icon" />
            <h1>Gestor de archivos</h1>
            </div>

            <!-- Login Form -->
            <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="registro.php">Registrar</a>
            </div>

        </div>
    </div>

    <script src="librerias/sweetalert.min.js"></script>
</body>
</html>