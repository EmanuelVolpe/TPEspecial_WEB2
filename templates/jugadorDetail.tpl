{include 'templates/header.tpl'}

    <div class="container">
        
        <h1>{$titulo|upper}</h1>

        <h1>Nombre del Jugador: {$jugador->jugador}</h1>
        <h1>Posicion del Jugador: {$jugador->posicion}</h1>
        <h1>Equipo del Jugador: {$jugador->nombreEquipo}</h1>

        <a href='verJugadores'><button type="button" class="btn btn-info">Volver</button></a>
        
    </div>
    
{include 'templates/footer.tpl'}