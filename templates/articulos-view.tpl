{include file="header.tpl"}

<section>
    <div class="container px-0 mt-5">
        <h3 class="text-center">
         {if (isset($pais))}
             {$titulo|cat: $pais}
        {else}
            {$titulo}
         {/if} 
        </h3>
        {foreach from=$articulos item=$articulo}
            {if (!isset($pais))}
                <p><i class="fa fa-map-marker mx-3" aria-hidden="true"></i>{$articulo->nombre}</p>
            {/if}
            <p><i class="fas fa-plane mx-3"></i>{$articulo->titulo}</p>
        {/foreach}   
    </div>
</section>

{include file="footer.tpl"}