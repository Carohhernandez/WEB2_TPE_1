<form action="createArticulo" method="POST" id="formArticle" enctype="multipart/form-data" class='d-flex flex-column w-100'>
    <label class='d-block mb-2'>Ingrese el titulo del articulo:</label>
    <input type="text" name="titulo" placeholder="Titulo" class='mb-2' required>
    <label class='d-block mb-2'>Ingrese el contenido del articulo:</label>
    <textarea type="text" name="contenido" placeholder="Contenido" class='mb-2' required row='3'></textarea>
    <label class='d-block mb-2'>Ingrese la direccion de la imagen:</label>
    <input type="file" name="input_name" id="imageToUpload" placeholder="Cargue un archivo" class='mb-2'>
    <label class='d-block mb-2'>Seleccione el pais del articulo:</label>
    <select name="pais" class='mb-2' required>
        <option disabled selected>Pais</option>
        {foreach from=$paises item=$pais}
            <option value={$pais->id_pais}>{$pais->nombre}</option>
        {/foreach}
    </select>
    <button type="submit" class='mt-4'>AGREGAR</button>
</form>