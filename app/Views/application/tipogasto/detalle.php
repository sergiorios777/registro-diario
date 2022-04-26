<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="/aplicacion/tipogasto">Regresar</a>
        <table>
            <caption><?php echo $titulo; ?> (Id: <?php echo $tipogasto['IdTipoGasto']; ?>)</caption>
            <thead>
                <tr>
                    <th scope="col">-</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id:</th>
                    <td><?php echo $tipogasto['IdTipoGasto']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de gasto:</th>
                    <td><?php echo $tipogasto['TipoGasto']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Objeto del gasto:</th>
                    <td><?php echo $tipogasto['TipoObjeto']; ?></td>
                </tr>
            </tbody>
            <tfoot>
                    <td colspan="2">
                        <a href="/aplicacion/tipogasto/edit/<?php echo $tipogasto['IdTipoGasto']; ?>">Editar</a>
                        <a href="/aplicacion/tipogasto/delete/<?php echo $tipogasto['IdTipoGasto']; ?>">Eliminar</a>
                    </td>
            </tfoot>
        </table>
<?= $this->endSection() ?>