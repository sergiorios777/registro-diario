<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?= base_url() ?>/aplicacion/tipogasto/new">Registrar tipo de gasto nuevo</a>
        <?= view("application/partials/_mensaje") ?>
        <table>
            <caption>Tabla de tipo de gastos registrados</caption>
            <thead>
                <tr>
                    <th hidden>id</th>
                    <th>Registro</th>
                    <th>Tipo de gasto</th>
                    <th>Objeto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $numero=0;
                foreach ($tipogasto as $key => $tco): ?>
                <tr>
                    <td hidden><?php echo $tco['IdTipoGasto']; ?></td>
                    <td><?php $numero += 1; echo $numero; ?></td>
                    <td><?php echo $tco['TipoGasto']; ?></td>
                    <td><?php echo $tco['TipoObjeto']; ?></td>
                    <td>
                        <a href="<?= base_url() ?>/aplicacion/tipogasto/show/<?php echo $tco['IdTipoGasto']; ?>">Detalle</a>
                        <a href="<?= base_url() ?>/aplicacion/tipogasto/edit/<?php echo $tco['IdTipoGasto']; ?>">Editar</a>
                        <a href="<?= base_url() ?>/aplicacion/tipogasto/delete/<?php echo $tco['IdTipoGasto']; ?>">Eliminar</a>
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