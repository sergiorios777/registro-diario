    <main>
        <h2>Ingresos registrados</h2>
        <a href="/aplicacion/ingresos/new">Registrar ingreso nuevo</a>
        <?= view("application/partials/_mensaje") ?>
        <table>
            <caption>Tabla de ingresos registrados</caption>
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
                foreach ($ingresos as $key => $ing): ?>
                <tr>
                    <td hidden><?php echo $ing['IdIngreso']; ?></td>
                    <td><?php $numero += 1; echo $numero; ?></td>
                    <td><?php echo $ing['Fecha']; ?></td>
                    <td><?php echo $ing['Notas']; ?></td>
                    <td><?php echo $ing['Monto']; $total += $ing['Monto']; ?></td>
                    <td>
                        <a href="/aplicacion/ingresos/show/<?php echo $ing['IdIngreso']; ?>">Detalle</a>
                        <a href="/aplicacion/ingresos/edit/<?php echo $ing['IdIngreso']; ?>">Editar</a>
                        <a href="/aplicacion/ingresos/delete/<?php echo $ing['IdIngreso']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"> Total ingresos: <?= $total ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </main>