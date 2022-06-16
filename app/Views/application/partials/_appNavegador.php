<nav>
    <div class="nav-wrapper">
    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?= base_url() ?>/aplicacion">Inicio</a></li>
            <li><a href="<?= base_url() ?>/aplicacion/ingresos">Ingresos</a></li>
            <li><a href="<?= base_url() ?>/aplicacion/gastos">Gastos</a></li>
            <li></li>
            <li><a href="#!">Clientes</a></li>
            <li><a href="#!">Proveedores</a></li>
            <li><a href="<?= base_url() ?>/aplicacion/tipocomprobante">Tipo de comprobante</a></li>
            <li><a href="<?= base_url() ?>/aplicacion/tipogasto">Tipo de gastos</a></li>
            <li></li>
            <?php print $this->include('application/partials/_session'); ?>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-menu">
    <li><a href="<?= base_url() ?>/aplicacion"><i class="material-icons">home</i> Inicio</a></li>
    <li><a href="<?= base_url() ?>/aplicacion/ingresos"><i class="material-icons">store</i> Ingresos</a></li>
    <li><a href="<?= base_url() ?>/aplicacion/gastos"><i class="material-icons">receipt</i> Gastos</a></li>
    <li class="divider"></li>
    <li><a href="#!">Clientes</a></li>
    <li><a href="#!">Proveedores</a></li>
    <li><a href="<?= base_url() ?>/aplicacion/tipocomprobante"><i class="material-icons">toc</i>Tipo de comprobante</a></li>
    <li><a href="<?= base_url() ?>/aplicacion/tipogasto"><i class="material-icons">card_membership</i>Tipo de gastos</a></li>
    <li class="divider"></li>
    <?php print $this->include('application/partials/_session'); ?>
</ul>