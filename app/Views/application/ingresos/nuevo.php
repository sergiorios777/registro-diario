<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Registrar nuevo Ingreso </h2>
        <a href="<?= base_url() ?>/aplicacion/ingresos">Regresar</a>
        <?= view("application/partials/_mensaje") ?>
        <div>
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
        </div>
        <form action="/aplicacion/ingresos/create" method="post">
            <caption>Registrar un nuevo ingreso</caption>
            <fieldset>
                <legend>Información general:</legend>
                <?= csrf_field() ?>
                <label for="tipo">Tipo de comprobante:</label>
                <select name="tipo" id="tipo">
                    <option value="">---Seleccione el comprobante---</option>
                    <?php

                    foreach ($tipocomprobante as $clave => $tco) {
                        echo '<option value="' . $tco->IdTipoComprobante . '">' . $tco->TipoComprobante . '</option>';
                    }

                    ?>
                </select>
                <label for="comprobante">Número de comprobante:</label>
                <input type="text" name="comprobante" id="comprobante" value="<?= old('comprobante', $ingresos['NumeroComprobante']) ?>">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?= old('fecha', $ingresos['Fecha']) ?>">
                <label for="textarea">Notas:</label>
                <textarea name="notas" id="notas" cols="30" rows="10"><?= old('notas', $ingresos['Notas']) ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Montos de la operación:</legend>
                <label for="aplicaigv">Aplica IGV:</label>
                <input type="checkbox" id="aplicaigv" name="aplicaigv" value="1" <?php if (old('aplicaigv', $ingresos['AplicaIGV'])) { echo "checked"; } ?>>
                <label for="monto">Monto:</label>
                <input type="text" name="monto" id="monto" value="<?= old('monto', $ingresos['Monto']) ?>">
                <label for="igv">IGV:</label>
                <input type="text" name="igv" id="igv" value="<?= old('igv', $ingresos['IGV']) ?>">
                <label for="montototal">Monto total:</label>
                <input type="text" name="montototal" id="montototal" value="<?= old('montototal', $ingresos['MontoTotal']) ?>">
            </fieldset>
            <button type="submit">
                Guardar ingreso
            </button>
        </form>
<?= $this->endSection() ?>