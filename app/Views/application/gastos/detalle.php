<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Detalle del Gasto </h2>
        <a href="/aplicacion/gastos">Regresar</a>
        <table>
            <caption>Detalle del gasto (Id: <?php echo $gastos['IdGasto']; ?>)</caption>
            <thead>
                <tr>
                    <th scope="col">-</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id:</th>
                    <td><?php echo $gastos['IdGasto']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo comprobante:</th>
                    <td><?php echo $comprobante; ?></td>
                </tr>
                <tr>
                    <th scope="row">Número:</th>
                    <td><?php echo $gastos['NumeroComprobante']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Fecha:</th>
                    <td><?php echo $gastos['Fecha']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Notas:</th>
                    <td><?php echo $gastos['Notas']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Monto:</th>
                    <td><?php echo $gastos['Monto']; ?></td>
                </tr>
                <tr>
                    <th scope="row">IGV:</th>
                    <td><?php echo $gastos['IGV']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Monto total:</th>
                    <td><?php echo $gastos['MontoTotal']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Modificado:</th>
                    <td><?php echo $gastos['Modificado']; ?></td>
                </tr>
            </tbody>
            <tfoot>
                    <td colspan="2">
                        <a href="/aplicacion/gastos/edit/<?php echo $gastos['IdGasto']; ?>">Editar</a>
                        <a href="/aplicacion/gastos/delete/<?php echo $gastos['IdGasto']; ?>">Eliminar</a>
                    </td>
            </tfoot>
        </table>
<?= $this->endSection() ?>