<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4">
            <i class="material-icons">home</i><a href="<?= route_to('web.inicio') ?>">Inicio</a>
            <h5 class="center-align">Registro de ingresos y gastos</h5>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4 center">
            <main>
                <?= view('web/usuario/partials/_mensaje') ?>
                <?= $this->renderSection('contenido') ?>
            </main>
        </div>
    </div>
</div>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?= base_url() ?>/js/publico.js"></script>
</body>
</html>