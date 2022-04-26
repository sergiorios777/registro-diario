<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>
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
</body>
</html>