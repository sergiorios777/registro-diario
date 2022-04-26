<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <section>
        <h3>Registros diarios</h3>
        <article>
                <header>Registro de ingresos</header>
                <main>
                    <p>Registro por ventas, saldos y otros ingresos.</p>
                </main>
                <footer>
                    <a href="/aplicacion/ingresos">Ingresos</a>
                </footer>
        </article>
        <article>
                <header>Registro de gastos</header>
                <main>
                    <p>Registro por compras, servicios, cargos financieros y otros gastos.</p>
                </main>
                <footer>
                    <a href="/aplicacion/gastos">Gastos</a>
                </footer>
        </article>
    </section>
    <section>
        <h3>Información complementaria</h3>
        <article>
                <header>Registro de tipo de comprobante</header>
                <main>
                    <p>Mantenimiento de tipos de comprobantes de pago.</p>
                </main>
                <footer>
                    <a href="/aplicacion/tipocomprobante">Comprobantes</a>
                </footer>
        </article>
        <article>
                <header>Registro de tipo de gasto</header>
                <main>
                    <p>Mantenimiento de tipos de gastos.</p>
                </main>
                <footer>
                    <a href="/aplicacion/tipogasto">Tipo de gasto</a>
                </footer>
        </article>
    </section>
<?= $this->endSection() ?>