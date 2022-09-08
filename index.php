<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    <div class="login-box">
        <h2>Inicios de sesión</h2>
        <form action="Connection.php" method="post">
          <div class="user-box">
            <input type="text" name="Usuario" required="">
            <label>Correo</label>
          </div>
          <div class="user-box">
            <input type="password" name="Contraseña" required="">
            <label>Contraseña</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" class="casa">Entrar</button>
          </a>
        </form>
      </div>
</body>
</html>
