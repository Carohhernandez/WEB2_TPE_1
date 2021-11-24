<form id="formComentario" class='d-flex flex-column w-100 p-5'>
    <label class='d-block mb-2'>Ingrese un comentario:</label>
    <textarea type="text" id="input-comentario" name="comentario" placeholder="Comentario" class='mb-2' required row='3'></textarea>
    <label class='d-block mb-2'>Ingrese una puntuacion (entre 1 y 5):</label>
    <input type="number" id="input-puntuacion" name="puntuacion" placeholder="Puntuacion" min="1" max="5" class='mb-2' required>
    <button type="submit" class='mt-4'>ENVIAR</button>
</form>
   