<div class="w-100 d-flex align-items-center justify-content-center mt-4">
    {if $paginaActual == 1}
        <div class="pagination-box disabled">Anterior</div>
    {else}
        <div class="pagination-box"><a href="Articulos/{$paginaActual - 1}">Anterior</a></div>
    {/if}
    {for $i = 1 to $numeroDePaginas}
        {if $i == $paginaActual}
            <div class="pagination-box active">{$i}</div>
        {else}
            <div class="pagination-box"><a href="Articulos/{$i}">{$i}</a></div>
        {/if}
    {/for}
     {if $paginaActual == $numeroDePaginas}
        <div class="pagination-box disabled">Siguiente</div>
    {else}
        <div class="pagination-box"><a href="Articulos/{$paginaActual + 1}">Siguiente</a></div>
    {/if}
</div>