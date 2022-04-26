<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="/aplicacion/tipocomprobante">Regresar</a>
        <table>
            <caption><?php echo $titulo; ?> (Id: <?php echo $tipocomprobante['IdTipoComprobante']; ?>)</caption>
            <thead>
                <tr>
                    <th scope="col">-</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id:</th>
                    <td><?php echo $tipocomprobante['IdTipoComprobante']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de comprobante:</th>
                    <td><?php echo $tipocomprobante['TipoComprobante']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Codigo de comprobante:</th>
                    <td><?php echo $tipocomprobante['CodigoComprobante']; ?></td>
                </tr>
            </tbody>
            <tfoot>
                    <td colspan="2">
                        <a href="/aplicacion/tipocomprobante/edit/<?php echo $tipocomprobante['IdTipoComprobante']; ?>">Editar</a>
                        <a href="/aplicacion/tipocomprobante/delete/<?php echo $tipocomprobante['IdTipoComprobante']; ?>">Eliminar</a>
                    </td>
            </tfoot>
        </table>
<?= $this->endSection() ?>