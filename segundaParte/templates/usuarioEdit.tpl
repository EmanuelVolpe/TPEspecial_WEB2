{include 'templates/header.tpl'}

    <div class="container">
    
        <h1>{$titulo}</h1>

        <form action="actualizarUsuario" method="POST">
            <div class="row">
                
                <div class="col">
                    <div class="form-group">
                        <label>Permiso de Administracion</label>
                        <select name="administrador" class="form-control">
                            <option value=0>0</option>
                            <option value=1>1</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Username<input name="username" class="form-control" value="{$usuario->username}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        ID usuario Logueado<input name="id_usuario" class="form-control" value="{$usuario->id_usuario}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Valor Admin actual<input name="administ" class="form-control" value="{$usuario->administ}">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Edicion</button>
        </form>
        
    </div>
{include 'templates/footer.tpl'}