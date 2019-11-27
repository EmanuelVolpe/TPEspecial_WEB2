{include 'templates/header.tpl'}
    <div class="container">
        <h1>{$titulo}</h1>

    {if isset($isAdmin) && $isAdmin==1}
        <form action="nuevoEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="pais" type="text" class="form-control" placeholder="Pais">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulos" type="text" class="form-control" placeholder="Cantidad de Titulos">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Equipo</button>
        </form>
    {/if}

        <div class="container">
            <h1></h1>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Equipo</th>
                    <th scope="col">Nombre Del Equipo</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Cantidad de Titulos</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            {foreach $equipos as $equipo}
                <tr>
                    <td>{$equipo->id_equipo}</td> 
                    <td>{$equipo->nombre}</td> 
                    <td>{$equipo->pais}</td> 
                    <td>{$equipo->cantidad_titulos}</td> 
                    <td><a href='verEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-info">Ver Detalle</button></a>
                        {if isset($isAdmin) && $isAdmin==1}
                            <a href='editarEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-success">Editar</button></a>     
                            <a href='eliminarEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-danger">Borrar</button></a>
                        {/if}</td>  
                </tr>
            {/foreach}
        </table>
        
    </div>
{include 'templates/footer.tpl'}