{include file="header.tpl"}

<div class="d-flex flex-column">
    <h2 class="my-4 text-center">{$titulo}</h2>
    <div class="d-flex w-100 justify-content-around mt-4">
        <div class="col-3 p-0">
            <img src="{$imagen}" class='w-100'>
        </div>
        <div class="col-6">
            <p>{$contenido}</p>
        </div>
    </div>
</div>


{if $login}
    <div class="d-flex m-4 form-container">
       {include file="comentario-add-form.tpl"} 
    </div>
{/if}

<div class="w-100 m-4 comentarios-container" data-role="{if $login}{$smarty.session.role}{else}''{/if}">
      {include file="comentarios.tpl"} 
</div>

{include file="footer.tpl"}