<?= $this->extend('web/usuario/layouts/loginLayout') ?>
<?= $this->section('contenido') ?>
    <?= view('web/usuario/partials/_form-errors') ?>
    <form action="<?= route_to('usuario.login.post') ?>" method="post">
        <caption>Iniciar sesión</caption>
        <?= csrf_field() ?>
        <label for="correo">Usuario o correo:
            <input type="text" name="correo" id="correo" placeholder="usuario o algun@correo.com">
        </label>
        <label for="contrasena">Contraseña:
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
        </label>
        <input type="submit" value="Ingresar">
    </form>
    <a href="<?= route_to('usuario.registrar') ?>">Crear usuario</a>
    <a href="<?= route_to('web.inicio') ?>">Inicio</a>
<?= $this->endSection() ?>