<?= $this->extend('web/usuario/layouts/loginLayout') ?>
<?= $this->section('contenido') ?>
    <div class="card">
        <?= view('web/usuario/partials/_form-errors') ?>
        <div class="card-content">
            <form action="<?= route_to('usuario.registrar.post') ?>" method="post">
                <caption><span class="card-title">Registrar usuario nuevo</span></caption>
                <?= csrf_field() ?>
                <div class="input-field">
                    <input type="email" name="correo" id="correo" placeholder="algun@correo.com" class="validate">
                    <label for="correo">Correo:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="usuario" id="usuario" placeholder="nombre de usuario" class="validate">
                    <label for="usuario">Usuario:</label>
                </div>
                <div class="input-field">
                    <input type="password" name="contrasena" id="contrasena" class="validate">
                    <label for="contrasena">Contraseña:</label>
                </div>
                <div class="center">
                    <button class="btn waves-effect waves-light light-blue darken-2" type="submit">Crear usuario</button>
                </div>
            </form>
        </div>
        
    </div>
        <a href="<?= route_to('usuario.login') ?>">Iniciar sesi&oacute;n</a>
<?= $this->endSection() ?>