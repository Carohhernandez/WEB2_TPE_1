<form action="updateArticulo/{$editArticulo->id_articulo}" method="POST" id="formArticle" class='d-flex flex-column w-100'>
    <label class='d-block mb-2'>Ingrese el titulo del articulo:</label>
    <input type="text" name="titulo" placeholder="Titulo" class='mb-2' required value="{$editArticulo->titulo}">
    <label class='d-block mb-2'>Ingrese el contenido del articulo:</label>
    <textarea type="text" name="contenido" placeholder="Contenido" class='mb-2' required row='3'>{$editArticulo->contenido}</textarea>
    <label class='d-block mb-2'>Ingrese la direccion de la imagen:</label>
    <input type="text" name="imagen" placeholder="Direccion de la imagen" class='mb-2' required value="{$editArticulo->imagen}">
    <label class='d-block mb-2'>Seleccione el pais del articulo:</label>
    <select name="pais" class='mb-2' required>
        {foreach from=$paises item=$pais}
            <option value={$pais->id_pais}  {if ($editArticulo->pais === $pais->id_pais)}selected {/if}>{$pais->nombre}</option>
        {/foreach}
    </select>
    <button type="submit" class='mt-4'>EDITAR</button>
</form>