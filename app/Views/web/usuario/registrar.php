<?= $this->extend('web/usuario/layouts/loginLayout') ?>
<?= $this->section('contenido') ?>
        <?= view('web/usuario/partials/_form-errors') ?>
        <form action="<?= route_to('usuario.registrar.post') ?>" method="post">
            <caption>Crear usuario</caption>
            <label for="correo">Correo:
                <input type="email" name="correo" id="correo" placeholder="algun@correo.com">
            </label>
            <label for="usuario">Usuario:
                <input type="text" name="usuario" id="usuario" placeholder="nombre de usuario">
            </label>
            <label for="contrasena">Contraseña:
                <input type="password" name="contrasena" id="contrasena">
            </label>
            <input type="submit" value="Crear usuario">
        </form>
        <a href="<?= route_to('usuario.login') ?>">Iniciar sesión</a>
        <a href="<?= route_to('web.inicio') ?>">Inicio</a>
<?= $this->endSection() ?>