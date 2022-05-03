<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro diario</title>
</head>
<body>
    <header>
        <p>Aplicación de registros diarios</p>
    </header>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="<?= route_to('usuario.login') ?>">Ingresar</a></li>
            <li>Acerca de</li>
        </ul>
    </nav>
    <main>
        <h1>Registro diario de ingresos y gastos</h1>
        <p>Ingrese a la aplicación para el registro de ingresos y gastos de su actividad.</p>
        <a href="<?= route_to('usuario.registrar') ?>">Registrarse</a>
        <a href="<?= route_to('usuario.login') ?>">Iniciar sesión</a>
    </main>
    <footer>
        <p>Este es el pie de página</p>
    </footer>
</body>
</html>