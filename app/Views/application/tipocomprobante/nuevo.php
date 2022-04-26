<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipocomprobante">Regresar</a>
        <form action="/aplicacion/tipocomprobante/create" method="post">
            <caption>Registrar un tipo de comprobante nuevo</caption>
            <?= view("application/tipocomprobante/partials/_fieldsets") ?>
            <button type="submit">
                Crear Comprobante
            </button>
        </form>
<?= $this->endSection() ?>