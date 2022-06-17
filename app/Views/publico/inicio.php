<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro diario</title>
</head>
<body>

<div class="container">
    <header>
        <p>Aplicación de registros diarios</p>
    </header>
    <nav>
        <div class="nav-wrapper light-blue darken-2">
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Inicio</a></li>
                <li><a href="<?= route_to('usuario.login') ?>">Ingresar</a></li>
                <li><a href="#!">Acerca de</a></li>
                <?php print $this->include('application/partials/_session') ?>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-menu">
        <li><a href="/">Inicio</a></li>
        <li><a href="<?= route_to('usuario.login') ?>">Ingresar</a></li>
        <li><a href="#!">Acerca de</a></li>
        <?php print $this->include('application/partials/_session') ?>
    </ul>

    <div class="row">
    <main>
        <div class="col s12">
        <h1>Registro diario de ingresos y gastos</h1>
        <p>Ingrese a la aplicación para el registro de ingresos y gastos de su actividad.</p>
        </div>
        
        <div class="col s6 m3 offset-m3">
        <a class="btn waves-effect waves-light light-blue darken-2" href="<?= route_to('usuario.registrar') ?>">Registrarse</a>
        </div>

        <div class="col s6 m3">
        <a class="btn waves-effect waves-light light-blue darken-2" href="<?= route_to('usuario.login') ?>">Iniciar sesión</a>
        </div>
        
    </main>
    </div>

    <div class="divider"></div>

    <footer>
        <p>Este es el pie de página</p>
    </footer>
</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/publico.js"></script>
</body>
</html>