<!DOCTYPE html>
<html lang="es-SV">

<head>
    <title>INICIO DE SESIÓN: EDUARDO ENRIQUE RAMIREZ LEMUS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="fonts/fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
    <script type="text/javascript" src="fonts/fontawesome/js/all.js"></script>
</head>

<body>
    <div class="login-container">
        <img src="media/logo/logo_corporativo.png" id="img" alt="Logo">
        <h5>Diseñando estrategias para la recuperación y migración de base de datos</h5>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="usuario"><i class="fas fa-user"></i> Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>
    </div>
</body>

</html>


