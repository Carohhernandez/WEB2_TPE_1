{include file="header.tpl"}

<section>
    <h3 class="text-center mt-5">Nuestros articulos</h3>
    <div  class='w-100 d-flex justify-content-around align-items-center'>
        <div class="col-4 px-0 mt-5">
            <div class="d-flex flex-column">
                {foreach from=$articulos item=$articulo}
                    <p class='mb-2'><i class="fa fa-map-marker mx-3" aria-hidden="true"></i>{$articulo->nombre}</p>
                    <div class="d-flex align-items-center mb-4">
                    <a href="{BASE_URL}Articulo/{$articulo->nombre}/{$articulo->id_articulo}" class="text-dark text-decoration-none my-2">
                        <i class="fas fa-plane mx-3"></i>
                        {$articulo->titulo}
                    </a>
                    {if ( $login && ($smarty.session.role == 1) && !isset($pais) )}
                        <a href="deleteArticulo/{$paginaActual}/{$articulo->id_articulo}"><i class="fa fa-trash mx-3 trash" aria-hidden="true"></i></a>
                        <a href="editArticulo/{$paginaActual}/{$articulo->id_articulo}"><i class="fas fa-pen mx-3 edit" aria-hidden="true"></i></a>
                    {/if}
                    </div> 
                {/foreach}  
            </div> 
        </div>
        <div class='col-4 px-0 mt-5'>
            {if ($login && ($smarty.session.role == 1) && !isset($pais))}
                <div class="d-flex p-4 form-container">
                    {if isset($editArticulo)}
                        {include file="articulo-edit-form.tpl"}
                    {else}
                        {include file="articulo-add-form.tpl"}                
                    {/if}
                </div>
            {/if}
        </div>
    </div>
</section>

{include file="paginacion.tpl"}
{include file="footer.tpl"}

