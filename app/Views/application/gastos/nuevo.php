<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Registrar nuevo gasto </h2>
        <a href="/aplicacion/gastos">Regresar</a>
        <div>
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
        </div>
        <form action="/aplicacion/gastos/create" method="post">
            <caption>Registrar un nuevo gasto</caption>
            <?= csrf_field() ?>
            <fieldset>
                <legend>Información general:</legend>
                <label for="tipo">Tipo de comprobante:</label>
                <select name="tipo" id="tipo">
                    <option value="">---Seleccione tipo de comprobante---</option>
                    <?php

                    foreach ($tipocomprobante as $clave => $tco) {
                        echo '<option value="' . $tco->IdTipoComprobante . '">' . $tco->TipoComprobante . '</option>';
                    }

                    ?>
                </select>
                <label for="comprobante">Número de comprobante:</label>
                <input type="text" name="comprobante" id="comprobante" value="<?= old('comprobante', $gastos['NumeroComprobante']) ?>">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?= old('fecha', $gastos['Fecha']) ?>">
                <label for="textarea">Notas:</label>
                <textarea name="notas" id="notas" cols="30" rows="10"><?= old('notas', $gastos['Notas']) ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Montos de la operación:</legend>
                <label for="aplicaigv">Aplica IGV:</label>
                <input type="checkbox" id="aplicaigv" name="aplicaigv" value="1" <?php if (old('aplicaigv', $gastos['AplicaIGV'])) { echo "checked"; } ?>>
                <label for="monto">Monto:</label>
                <input type="text" name="monto" id="monto" value="<?= old('monto', $gastos['Monto']) ?>">
                <label for="igv">IGV:</label>
                <input type="text" name="igv" id="igv" value="<?= old('igv', $gastos['IGV']) ?>">
                <label for="montototal">Monto total:</label>
                <input type="text" name="montototal" id="montototal" value="<?= old('montototal', $gastos['MontoTotal']) ?>">
            </fieldset>
            <button type="submit">
                Guardar gasto
            </button>
        </form>
<?= $this->endSection() ?>