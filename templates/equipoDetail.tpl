{include 'templates/header.tpl'}

<div class="container">

        <h1>{$titulo|upper}</h1>

        <h1>Nombre del Equipo: {$equipo->nombre}</h1>
        <h1>Pais: {$equipo->pais}</h1>
        <h1>Cantidad de Titulos: {$equipo->cantidad_titulos}</h1>
        <h1>Jugadores:</h1>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Posicion</th>
                        </tr>
                    </thead>
                    {foreach $jugadoresDelEquipo as $equipo}
                        <tr>
                            <td>{$equipo->jugador}</td> <td>{$equipo->posicion}</td>
                        </tr>
                    {/foreach}
                </table>

        <a href='verEquipos'><button type="button" class="btn btn-info">Volver</button></a>
</div>

{include 'templates/footer.tpl'}
