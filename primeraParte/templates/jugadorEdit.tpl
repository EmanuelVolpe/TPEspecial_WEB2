{include 'templates/header.tpl'}

    <div class="container">
    
        <h1>{$titulo}</h1>

        <form action="actualizarJugador" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" readonly class="form-control-plaintext" id="staticEmail" value="{$jugador->jugador}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Posicion</label>
                        <select name="posicionEditada" class="form-control">
                            <option value="arquero">Arquero</option>
                            <option value="defensor">Defensor</option>
                            <option value="volante">Volante</option>
                            <option value="delantero">Delantero</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nombre del Equipo</label>
                        <select name="id_equipoEditado" class="form-control">
                            <option value="{$equipo->id_equipo}" selected>{$equipo->nombre}</option> 
                            {foreach $equipos as $equipo}
                                <option value="{$equipo->id_equipo}">{$equipo->nombre}</option> 
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_jugadorEditado" type="hidden" class="form-control" value="{$jugador->id_jugador}">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Edicion</button>
        </form>
        
    </div>
{include 'templates/footer.tpl'}