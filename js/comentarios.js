document.addEventListener("DOMContentLoaded", function (e) {
    const URL_API = "api/comentarios";
    var comentariosContainer = document.querySelector(".comentarios-container");
    var role = comentariosContainer.getAttribute("data-role") || "";

    function hideDelete()  {  
       const btns = document.querySelectorAll(".deleteComentario");
       btns.forEach(btn => {
            if (role == 1) {
                btn.style.visibility="visible"; 
            } else {
                btn.style.visibility="hidden"; 
            }
        });     
    }

    async function getComentarios() {
        try {
            const id_articulo = window.location.href.split("/")[7];
            const response = await fetch(`${URL_API}/${id_articulo}`);
            if (response.ok) {
                const comentarios = await response.json();
                mostrarComentarios(comentarios);
                agregarEliminarABoton();
                hideDelete();
            } else {
                document.querySelector("#comentarios-table").innerHTML = `<p>No hay comentarios en este articulo </p>`;
            }
        } catch (error) {
            document.querySelector("#comentarios-table").innerHTML = `<p>No hay comentarios en este articulo</p>`;
        }
    }

    function mostrarComentarios(comentarios) {
        const section = document.querySelector("#comentarios-table");
        section.innerHTML = "";

        // agregar los comentarios a la tabla en el HTML
        comentarios.forEach(comentario => {
            section.innerHTML += `<tr>
                <td class='px-4 py-1'>${comentario.id_usuario}</td>
                <td class='px-4 py-1'>${comentario.comentario}</td>
                <td class='px-4 py-1'>${comentario.puntuacion}</td>
                <td px-4 py-1'><button class="deleteComentario" id=${comentario.id_comentario}><i class="fa fa-trash mx-3 trash" aria-hidden="true"></i></button></td>
            </tr>`;
        });
    }

    // Agregar evento a los botones de eliminar
    function agregarEliminarABoton(){
        document.querySelectorAll(".deleteComentario").forEach(button => {
            button.addEventListener("click",(e)=>{
                deleteComentario(e.target.id);
            });
        });
    }

    async function deleteComentario(id_comentario) {
        const response = await fetch(`${URL_API}/${id_comentario}`,{
            method: 'DELETE'           
        });
        // Vuelvo a cargar los comentarios despues de elimiar uno
        if(response.ok){
            getComentarios();
        }
    }

    function getFormData() {
        const comentario = document.querySelector("#input-comentario").value;
        const puntuacion = document.querySelector("#input-puntuacion").value;
        const data = {};
        data.comentario = comentario;
        data.puntuacion = puntuacion;
        data.id_articulo = window.location.href.split("/")[7];
        return data;
    }

    if (role == 0 || role == 1) {
        document.querySelector("#formComentario").addEventListener("submit", (e) => {
            e.preventDefault();
            const data = getFormData();
            insertarComentario(data);
        });
    }

    async function insertarComentario(data) {
        console.log('insert comment');
        const response = await fetch(`${URL_API}`,{
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)        
        });
        console.log(response);
        if (response.ok) {
            getComentarios();
        }
    }

    // Llamo a la funcion para traer los comentarios
    getComentarios();
});