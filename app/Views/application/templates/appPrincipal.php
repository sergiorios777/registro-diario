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
    <header>
        <?= $this->include('application/partials/_encabezado') ?>
    </header>
    <aside>
        <?= $this->include('application/partials/_appNavegador') ?>
    </aside>
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>
    <footer>
        <?= $this->include('application/partials/_pie') ?>
    </footer>
</div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?= base_url() ?>/js/publico.js"></script>
</body>
</html>