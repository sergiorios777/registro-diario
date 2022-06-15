<section>
    <?php if (session('Usuario')): ?>
        <p>Usuario: <?= session('Correo') ?> con el rol de <?= session('TipoUsuario') ?> </p>
    <?php endif ?>
</section>