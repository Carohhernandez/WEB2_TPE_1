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

{include file="footer.tpl"}