{include file="header.tpl"}

<section>
    <h3 class="text-center mt-5">Administrar usuarios</h3>
    <div class='w-100 d-flex justify-content-center align-items-center p-5'>
        <table>
            <tr>
                <th class='p-4'>ID</th>
                <th class='p-4'>Email</th>
                <th class='p-4'>Admin</th>
                <th class='p-4'>Actions</th>
            </tr>
            {foreach from=$users item=$user}
                <tr>
                    <td  class='px-4 py-1'>{$user->id_usuario}</td>
                    <td  class='px-4 py-1'>{$user->email}</td>
                    <td  class='px-1 py-1'>
                        {if ($user->admin_role) == 1}
                            <a href="changeRole/{$user->id_usuario}/0">
                                <i class="fas fa-toggle-on fa-lg mx-3 toggle-on"></i>
                            </a>
                        {else}
                            <a href="changeRole/{$user->id_usuario}/1">
                                <i class="fas fa-toggle-off fa-lg mx-3  toggle-off"></i>
                            </a>
                        {/if}
                    </td>
                    <td  class='py-1'><a href="deleteUser/{$user->id_usuario}"><i class="fa fa-trash mx-3 trash" aria-hidden="true"></i></a></td>
                </tr>
            {/foreach}
        </table>
    </div>
</section>
{include file="footer.tpl"}