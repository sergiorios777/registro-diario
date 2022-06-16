        <nav>
            <ul>
                <li><a href="<?= base_url() ?>/aplicacion">Inicio</a></li>
                <li><a href="<?= base_url() ?>/aplicacion/ingresos">Ingresos</a></li>
                <li><a href="<?= base_url() ?>/aplicacion/gastos">Gastos</a></li>
            </ul>
            <ul>
                <li><a href="#!">Clientes</a></li>
                <li><a href="#!">Proveedores</a></li>
                <li><a href="<?= base_url() ?>/aplicacion/tipocomprobante">Tipo de comprobante</a></li>
                <li><a href="<?= base_url() ?>/aplicacion/tipogasto">Tipo de gastos</a></li>
            </ul>
            <?php print $this->include('application/partials/_session'); ?>
        </nav>