<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipogasto">Regresar</a>
        <?= view("application/partials/_mensaje") ?>
        <div>
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
        </div>
        <form action="<?= base_url() ?>/aplicacion/tipogasto/update/<?= $tipogasto['IdTipoGasto'] ?>" method="post">
            <caption>Actualizar un tipo de gasto registrado</caption>
            <?= csrf_field() ?>
            <?= view("application/tipogasto/partials/_fieldsets") ?>
            <button type="submit">
                Actualizar
            </button>
        </form>
<?= $this->endSection() ?>