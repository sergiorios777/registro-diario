<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Registrar nuevo gasto </h2>
        <a href="<?= base_url() ?>/aplicacion/gastos">Regresar</a>
        <?= view("application/partials/_mensaje") ?>
        <div>
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
        </div>
        <form action="/aplicacion/gastos/update/<?= $gastos['IdGasto'] ?>" method="post">
            <caption>Actualizar un gasto registrado</caption>
            <fieldset>
                <legend>Información general:</legend>
                <?= csrf_field() ?>
                <label for="tipo">Tipo de comprobante:</label>
                <select name="tipo" id="tipo">
                    <option value="">---Seleccione tipo de comprobante---</option>
                    <?php

                    foreach ($tipocomprobante as $clave => $tco) {
                        if ($tco['IdTipoComprobante']===$idcomprobante) {
                            $selectAttr = "selected";
                        } else {
                            $selectAttr = "";
                        }
                        echo '<option value="' . $tco['IdTipoComprobante'] . '" ' . $selectAttr . '>' . $tco['TipoComprobante'] . '</option>';
                    }

                    ?>
                </select>
                <label for="comprobante">Número de comprobante:</label>
                <input type="text" name="comprobante" id="comprobante" value="<?= $gastos['NumeroComprobante'] ?>">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?= $gastos['Fecha'] ?>">
                <label for="textarea">Notas:</label>
                <textarea name="notas" id="notas" cols="30" rows="10"><?= $gastos['Notas'] ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Montos de la operación:</legend>
                <label for="aplicaigv">Aplica IGV:</label>
                <input type="checkbox" id="aplicaigv" name="aplicaigv" value="1" <?php if ($gastos['AplicaIGV']) { echo "checked"; } ?>>
                <label for="monto">Monto:</label>
                <input type="text" name="monto" id="monto" value="<?= $gastos['Monto'] ?>">
                <label for="igv">IGV:</label>
                <input type="text" name="igv" id="igv" value="<?= $gastos['IGV'] ?>">
                <label for="montototal">Monto total:</label>
                <input type="text" name="montototal" id="montototal" value="<?= $gastos['MontoTotal'] ?>">
            </fieldset>
            <button type="submit">
                Actualizar
            </button>
        </form>
<?= $this->endSection() ?>