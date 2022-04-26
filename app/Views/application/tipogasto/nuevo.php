<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipogasto">Regresar</a>
        <div>
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
        </div>
        <form action="/aplicacion/tipogasto/create" method="post">
            <caption>Registrar un tipo de comprobante nuevo</caption>
            <?= csrf_field() ?>
            <?= view("application/tipogasto/partials/_fieldsets") ?>
            <button type="submit">
                Crear gasto
            </button>
        </form>
<?= $this->endSection() ?>