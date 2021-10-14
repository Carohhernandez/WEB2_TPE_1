<form action="updatePais/{$editPais->id_pais}" method="POST" class='d-flex flex-column w-100'>
    <label class='d-block mb-3'>Ingrese el nombre del pais:</label>
    <input type="text" name="nombre" placeholder="Nombre del pais" value={$editPais->nombre}>
    <button type="submit" class='mt-4'>EDITAR</button>
</form>