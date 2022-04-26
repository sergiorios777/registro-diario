<?= $this->extend('application/templates/appPrincipal') ?>

<?= $this->section('titulo') ?>
    Aplicación - <?php echo $titulo; ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <h2>Actualizar ingreso registrado </h2>
        <a href="<?= base_url() ?>/aplicacion/ingresos">Regresar</a>
        <?= view("application/partials/_mensaje") ?>
        <form action="<?= base_url() ?>/aplicacion/ingresos/update/<?= $ingresos['IdIngreso'] ?>" method="post">
            <caption>Registrar un nuevo ingreso</caption>
            <fieldset>
                <legend>Información general:</legend>
                <label for="tipo">Tipo de comprobante:</label>
                <select name="tipo" id="tipo">
                    <option value="">---Seleccione el comprobante---</option>
                    <?php

                    foreach ($tipocomprobante as $clave => $tco) {
                        $selectAttr = ($tco['IdTipoComprobante']===$idcomprobante) ? "selected" :  "";
                        echo '<option value="' . $tco['IdTipoComprobante'] . '" ' . $selectAttr . '>' . $tco['TipoComprobante'] . '</option>';
                    }

                    ?>
                </select>
                <label for="comprobante">Número de comprobante:</label>
                <input type="text" name="comprobante" id="comprobante" value="<?= $ingresos['NumeroComprobante'] ?>">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="<?= $ingresos['Fecha'] ?>">
                <label for="textarea">Notas:</label>
                <textarea name="notas" id="notas" cols="30" rows="10"><?= $ingresos['Notas'] ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Montos de la operación:</legend>
                <label for="aplicaigv">Aplica IGV:</label>
                <input type="checkbox" id="aplicaigv" name="aplicaigv" value="no">
                <label for="monto">Monto:</label>
                <input type="text" name="monto" id="monto" value="0">
                <label for="igv">IGV:</label>
                <input type="text" name="igv" id="igv" value="0">
                <label for="montototal">Monto total:</label>
                <input type="text" name="montototal" id="montototal" value="<?= $ingresos['Monto'] ?>">
            </fieldset>
            <button type="submit">
                Actualizar
            </button>
        </form>
<?= $this->endSection() ?>