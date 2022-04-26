            <fieldset>
                <legend>Información general:</legend>
                <input type="text" name="id" id="id" value="<?= $tipocomprobante['IdTipoComprobante'] ?>" hidden>
                <label for="tipo">Tipo de comprobante:</label>
                <input type="text" name="tipo" id="tipo" value="<?= $tipocomprobante['TipoComprobante'] ?>">
                <label for="codigo">Código de comprobante:</label>
                <input type="text" name="codigo" id="codigo" value="<?= $tipocomprobante['CodigoComprobante'] ?>">
            </fieldset>