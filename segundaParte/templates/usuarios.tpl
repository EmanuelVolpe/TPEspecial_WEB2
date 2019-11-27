{include 'templates/header.tpl'}

    <div class="container">

        <table class="table table-striped table-bordered">  
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Nombre Del Usuario</th>
                    <th scope="col">Administrador</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            {foreach $usuarios as $usuario}
                <tr>
                    <td>{$usuario->id_usuario}</td> 
                    <td>{$usuario->username}</td> 
                    <td>{$usuario->administ}</td>
                    <td>
                        {if isset($isAdmin) && $isAdmin==1} 
                            <a href='eliminarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-danger">Borrar Usuario</button></a>
                            <a href='editarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-danger">Hacer ADMIN</button></a>
                            
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </table>
    
    </div>



{include 'templates/footer.tpl'}