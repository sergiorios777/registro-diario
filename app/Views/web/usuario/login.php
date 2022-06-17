<?= $this->extend('web/usuario/layouts/loginLayout') ?>
<?= $this->section('contenido') ?>
    <?php if (session('Usuario')) { ?>
        <p><?= session('Usuario') ?>, ¿Desea <a href="<?= base_url() ?>/logout">cerrar la sesión</a>?</p> 
    <?php } else { ?>
        <div class="card">
            <?= view('web/usuario/partials/_form-errors') ?>
            <form action="<?= route_to('usuario.login.post') ?>" method="post">
            <div class="card-content">
                <caption><span class="card-title center-align">Iniciar sesi&oacute;n</span></caption>
                <?= csrf_field() ?>
                <div class="input-field">
                    <input type="text" name="correo" id="correo" class="validate tooltipped" data-position="bottom" data-tooltip="Nombre de usuario o correo.">
                    <label for="correo">Usuario o correo:</label>
                </div>
                <div class="input-field">
                    <input type="password" name="contrasena" id="contrasena" class="validate">
                    <label for="contrasena">Contraseña:</label>
                </div>
                <div class="center">
                    <button class="btn waves-effect waves-light light-blue darken-2" type="submit">Ingresar</button>
                </div>
            </div>
            </form>
        </div>
        <a href="<?= route_to('usuario.registrar') ?>">Crear usuario</a>
    <?php } ?>
<?= $this->endSection() ?>