<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Detalle del Ingreso </h2>
        <a href="<?= base_url() ?>/aplicacion/ingresos">Regresar</a>
        <table>
            <caption>Detalle del ingreso (Id: <?php echo $ingresos['IdIngreso']; ?>)</caption>
            <thead>
                <tr>
                    <th scope="col">-</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id:</th>
                    <td><?php echo $ingresos['IdIngreso']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de comprobante:</th>
                    <td><?php echo $comprobante; ?></td>
                </tr>
                <tr>
                    <th scope="row">Número:</th>
                    <td><?php echo $ingresos['NumeroComprobante']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Fecha:</th>
                    <td><?php echo $ingresos['Fecha']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Notas:</th>
                    <td><?php echo $ingresos['Notas']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Monto:</th>
                    <td><?php echo $ingresos['Monto']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Modificado:</th>
                    <td><?php echo $ingresos['Modificado']; ?></td>
                </tr>
            </tbody>
            <tfoot>
                    <td colspan="2">
                        <a href="<?= base_url() ?>/aplicacion/ingresos/edit/<?php echo $ingresos['IdIngreso']; ?>">Editar</a>
                        <a href="<?= base_url() ?>/aplicacion/ingresos/delete/<?php echo $ingresos['IdIngreso']; ?>">Eliminar</a>
                    </td>
            </tfoot>
        </table>
<?= $this->endSection() ?>