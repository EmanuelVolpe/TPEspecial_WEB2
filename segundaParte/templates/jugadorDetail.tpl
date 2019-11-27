{include 'templates/header.tpl'}

    <div class="container">
        
        <h1>{$titulo|upper}</h1>

        <h1>Nombre del Jugador:   {$jugador->jugador}</h1>
        <h1>Posicion del Jugador: {$jugador->posicion}</h1>
        <h1>Equipo del Jugador:   {$jugador->nombreEquipo}</h1>
        <h1>ID del Jugador:       {$jugador->id_jugador}</h1>
        {if isset($jugador->imagen)}
            <img src="{$jugador->imagen}" class="img-fluid rounded border border-success"/>
        {/if}
            <form action="api/comentarios" method="POST">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ingrese Comentario</label>
                            <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Puntuar Comentario</label>
                            <select name="puntaje" class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input name="id_jugador" type="hidden" class="form-control" value="{$jugador->id_jugador}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <a href='verJugadores'><button type="button" class="btn btn-info fixed-bottom btn-lg">Volver</button></a>
        
    </div>
    
{include 'templates/footer.tpl'}