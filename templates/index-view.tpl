{include file="header.tpl"}

<section>
    <div class="container px-0 mt-5">
        <h3 class="text-center">Elegí a donde viajar</h3>
        <div class="d-flex flex-column">
            {foreach from=$paises item=$pais}
                <a href="{BASE_URL}viewArticulosByPais/{$pais->id_pais}" class="text-dark text-decoration-none my-2">
                    <i class="fa fa-map-marker mx-3" aria-hidden="true"></i>
                    {$pais->nombre}
                </a>
            {/foreach}  
        </div> 
    </div>
    <div class="container px-0 mt-5">
        <a href='{BASE_URL}viewArticulos' class="font-weight-bold text-dark text-decoration-none">Ver todos los articulos<i class="fas fa-arrow-right mx-3"></i></a>
    </div>
</section>

{include file="footer.tpl"}

