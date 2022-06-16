<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>

<div class="container">

    <header>
        <?= $this->include('web/usuario/partials/_encabezado') ?>
    </header>
    <?= view('web/usuario/partials/_mensaje') ?>
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>
    <footer>
        <?= $this->include('web/usuario/partials/_pie') ?>
    </footer>
    
</div>
    
</body>
</html>