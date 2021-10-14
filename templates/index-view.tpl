{include file="header.tpl"}

<section>
    <h3 class="text-center mt-5">Elegí a donde viajar</h3>
    <div  class='w-100 d-flex justify-content-around align-items-center'>
        <div class="col-4 px-0 mt-5">
            <div class="d-flex flex-column">
                {foreach from=$paises item=$pais}
                    <div class="d-flex align-items-center">
                        <a href="{BASE_URL}Articulos/{$pais->nombre}" class="text-dark text-decoration-none my-2">
                            <i class="fa fa-map-marker mx-3" aria-hidden="true"></i>
                            {$pais->nombre}
                        </a>
                        {if $login}
                            <a href="deletePais/{$pais->id_pais}">
                                <i 
                                    class="fa fa-trash mx-3 trash" 
                                    data-toggle="tooltip" 
                                    data-placement="top"
                                    title="Si elimina este pais, se eliminaran tambien los articulos relacionados" 
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <a href="editPais/{$pais->id_pais}"><i class="fas fa-pen mx-3 edit" aria-hidden="true"></i></a>
                        {/if}
                    </div> 
                {/foreach}  
            </div> 
        </div>
        <div class='col-4 px-0 mt-5'>
            {if $login}
                <div class="d-flex p-4 form-container">
                    {if isset($editPais)}
                        {include file="pais-edit-form.tpl"}
                    {else}
                        {include file="pais-add-form.tpl"}                
                    {/if}
                </div>
            {/if}
        </div>  
    </div> 
    <div class="col-12 px-5 mt-5">
        <a href='{BASE_URL}Articulos' class="font-weight-bold text-dark text-decoration-none">Ver todos los articulos<i class="fas fa-arrow-right mx-3"></i></a>
    </div>
</section>

{include file="footer.tpl"}

