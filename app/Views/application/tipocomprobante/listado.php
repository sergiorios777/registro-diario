<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipocomprobante/new">Registrar comprobante nuevo</a>
        <?= view("application/partials/_mensaje") ?>
        <table>
            <caption>Tabla de tipo de comprobantes registrados</caption>
            <thead>
                <tr>
                    <th hidden>id</th>
                    <th>Registro</th>
                    <th>Comprobante</th>
                    <th>Codigo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $numero=0;
                foreach ($tipocomprobante as $key => $tco): ?>
                <tr>
                    <td hidden><?php echo $tco['IdTipoComprobante']; ?></td>
                    <td><?php $numero += 1; echo $numero; ?></td>
                    <td><?php echo $tco['TipoComprobante']; ?></td>
                    <td><?php echo $tco['CodigoComprobante']; ?></td>
                    <td>
                        <a href="<?= base_url() ?>/aplicacion/tipocomprobante/show/<?php echo $tco['IdTipoComprobante']; ?>">Detalle</a>
                        <a href="<?= base_url() ?>/aplicacion/tipocomprobante/edit/<?php echo $tco['IdTipoComprobante']; ?>">Editar</a>
                        <a href="<?= base_url() ?>/aplicacion/tipocomprobante/delete/<?php echo $tco['IdTipoComprobante']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"> :-) </td>
                </tr>
            </tfoot>
        </table>
<?= $this->endSection() ?>