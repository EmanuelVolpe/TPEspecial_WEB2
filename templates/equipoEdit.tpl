{include 'templates/header.tpl'}
    <div class="container">
        <h1>{$titulo}</h1>

        <form action="actualizarEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" class="form-control" value="{$equipo->nombre}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="paisEditado" type="text" class="form-control" value="{$equipo->pais}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulosEditado" type="text" class="form-control" value="{$equipo->cantidad_titulos}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_equipo" type="hidden" class="form-control" value="{$equipo->id_equipo}">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Edicion</button>
        </form>
        
    </div>
{include 'templates/footer.tpl'}