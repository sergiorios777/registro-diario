<?php if (session('Usuario')): ?>
    <li><a href="<?= base_url()?>/aplicacion">Aplicaci&oacute;n</a></li>
    <li><a href="#!"><?= session('Correo') ?> (<?= session('TipoUsuario') ?>)</a></li>
    <li><a href="<?= base_url() ?>/logout">Cerrar sesi&oacute;n</a></li>
<?php endif ?>