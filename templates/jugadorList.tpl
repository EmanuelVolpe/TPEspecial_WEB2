{include 'templates/header.tpl'}

    <div class="container">
    
        <h1>{$titulo}</h1>

        <form action="nuevoJugador" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Posicion</label>
                        <select name="posicion" class="form-control">
                            <option value="arquero">Arquero</option>
                            <option value="defensor">Defensor</option>
                            <option value="volante">Volante</option>
                            <option value="delantero">Delantero</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nombre del equipo</label>
                        <select name="id_equipo" class="form-control">
                            {foreach $equipos as $equipo}
                                <option value="{$equipo->id_equipo}">{$equipo->nombre}</option> 
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Jugador</button>
        </form>

        <div class="container">
            <h1></h1>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Jugador</th>
                    <th scope="col">Nombre Del Jugador</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Nombre del Equipo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            {foreach $jugadores as $jugador}
                <tr>
                    <td>{$jugador->id_jugador}</td> <td>{$jugador->nombreJugador}</td> <td>{$jugador->posicion}</td> <td>{$jugador->nombreEquipo}</td> <td><a href='editarJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-success">Editar</button>     <a href='eliminarJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-danger">Borrar</button></a> <a href='verJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                </tr>
            {/foreach}
        </table>
        
    </div>
{include 'templates/footer.tpl'}