<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Gastos registrados</h2>
        <a href="<?= base_url() ?>/aplicacion/gastos/new">Registrar gasto nuevo</a>
        <?= view("application/partials/_mensaje") ?>
        <table>
            <caption>Tabla de gastos registrados</caption>
            <thead>
                <tr>
                    <th hidden>id</th>
                    <th>Registro</th>
                    <th>Fecha</th>
                    <th>Notas</th>
                    <th>Monto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total=0;
                $numero=0;
                foreach ($gastos as $key => $gas): ?>
                <tr>
                    <td hidden><?php echo $gas->IdGasto; ?></td>
                    <td><?php $numero += 1; echo $numero; ?></td>
                    <td><?php echo $gas->Fecha; ?></td>
                    <td><?php echo $gas->Notas; ?></td>
                    <td><?php echo $gas->MontoTotal; $total += $gas->MontoTotal; ?></td>
                    <td>
                        <a href="<?= base_url() ?>/aplicacion/gastos/show/<?php echo $gas->IdGasto; ?>">Detalle</a>
                        <a href="<?= base_url() ?>/aplicacion/gastos/edit/<?php echo $gas->IdGasto; ?>">Editar</a>
                        <a href="<?= base_url() ?>/aplicacion/gastos/delete/<?php echo $gas->IdGasto; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"> Total gastos: <?= $total ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
<?= $this->endSection() ?>