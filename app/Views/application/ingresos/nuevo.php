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
                <div class="input-field">
                <select name="tipo" id="tipo">
                    <option value="">---Seleccione el comprobante---</option>
                    <?php

                    foreach ($tipocomprobante as $clave => $tco) {
                        echo '<option value="' . $tco->IdTipoComprobante . '">' . $tco->TipoComprobante . '</option>';
                    }

                    ?>
                </select>
                <label for="tipo">Tipo de comprobante:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="comprobante" id="comprobante" value="<?= old('comprobante', $ingresos['NumeroComprobante']) ?>" class="validate">
                    <label for="comprobante">Número de comprobante:</label>
                </div>
                <div class="input-field">
                    <input type="date" name="fecha" id="fecha" value="<?= old('fecha', $ingresos['Fecha']) ?>" class="validate">
                    <label for="fecha">Fecha:</label>
                </div>
                <div class="input-field">                
                    <textarea name="notas" id="notas" class="materialize-textarea" data-length="255"><?= old('notas', $ingresos['Notas']) ?></textarea>
                    <label for="textarea">Notas:</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Montos de la operación:</legend>
                <label for="aplicaigv">
                    <input type="checkbox" id="aplicaigv" name="aplicaigv" value="1" <?php if (old('aplicaigv', $ingresos['AplicaIGV'])) { echo "checked"; } ?>>
                    <span> Aplica IGV:</span>
                </label>
                <div class="input-field">
                    <input type="text" name="monto" id="monto" value="<?= old('monto', $ingresos['Monto']) ?>" class="validate">
                    <label for="monto">Monto:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="igv" id="igv" value="<?= old('igv', $ingresos['IGV']) ?>" class="validate">
                    <label for="igv">IGV:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="montototal" id="montototal" value="<?= old('montototal', $ingresos['MontoTotal']) ?>" class="validate">
                    <label for="montototal">Monto total:</label>
                </div>
            </fieldset>
            
            <button class="waves-effect waves-light btn" type="submit">
                Guardar ingreso
            </button>
        </form>
<?= $this->endSection() ?>