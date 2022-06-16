<?php if (session('Usuario')): ?>
<ul>
    <li><?= session('Correo') ?> (<?= session('TipoUsuario') ?>)</li>
    <li><a href="<?= base_url() ?>/logout">Cerrar sesi&oacute;n</a></li>
</ul>
<?php endif ?>