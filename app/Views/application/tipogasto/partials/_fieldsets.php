            <fieldset>
                <legend>Información general:</legend>
                <input type="text" name="id" id="id" value="<?= $tipogasto['IdTipoGasto'] ?>" hidden>
                <label for="tipo">Tipo de gasto:</label>
                <input type="text" name="gasto" id="gasto" value="<?= $tipogasto['TipoGasto'] ?>">
                <label for="codigo">Objeto del gasto:</label>
                <select name="objeto" id="objeto">
                    <option value="">---Seleccione objeto---</option>
                    <option value="Bienes" <?php if ($tipogasto['TipoObjeto']==='Bienes') { echo "selected"; } ?>>Bienes</option>
                    <option value="Servicios" <?php if ($tipogasto['TipoObjeto']==='Servicios') { echo "selected"; } ?>>Servicios</option>
                    <option value="Impuestos" <?php if ($tipogasto['TipoObjeto']==='Impuestos') { echo "selected"; } ?>>Impuestos</option>
                </select>
            </fieldset>