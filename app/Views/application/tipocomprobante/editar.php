<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipocomprobante">Regresar</a>
        <?= view("application/partials/_mensaje") ?>
        <form action="<?= base_url() ?>/aplicacion/tipocomprobante/update/<?= $tipocomprobante['IdTipoComprobante'] ?>" method="post">
            <caption>Actualizar un comprobante registrado</caption>
            <?= view("application/tipocomprobante/partials/_fieldsets") ?>
            <button type="submit">
                Actualizar
            </button>
        </form>
<?= $this->endSection() ?>