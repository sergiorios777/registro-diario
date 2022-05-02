<?= $this->extend('web/usuario/layouts/loginLayout') ?>
<?= $this->section('contenido') ?>
        <?= view('partials/_form-errors') ?>
        <form action="<?= route_to('usuario.login.post') ?>" method="post">
            <caption>Iniciar sesión</caption>
            <label for="correo">Usuario o correo:
                <input type="text" name="correo" id="correo" placeholder="Nombre de usuario | algun@correo.com">
            </label>
            <label for="contrasena">Contraseña:
                <input type="password" name="contrasena" id="contrasena">
            </label>
            <input type="submit" value="Ingresar">
        </form>
        <a href="<?= base_url() . 'web/crear-usuario' ?>">Crear usuario</a>
        <a href="<?= base_url() ?>">Inicio</a>
<?= $this->endSection ?>