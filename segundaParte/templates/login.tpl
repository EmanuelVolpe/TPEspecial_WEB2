<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$baseURL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent"></nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-4 bg-secondary">
                <form class="text-left" action="verifyUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                    <h1 class="text-left font-weight-bold">{$titulo}</h1>

                    <div class="form-group font-weight-bold">
                        <label>Usuario (email)</label>
                        <input type="email" name="username" class="form-control" placeholder="Ingrese email">
                    </div>

                    <div class="form-group font-weight-bold">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    {if $error}
                    <div class="alert alert-danger" role="alert">
                        {$error}
                    </div>
                    {/if}

                    <button type="submit" class="btn btn-primary font-weight-bold">Ingresar</button>
                </form>
            </div>

            <div class="col-sm"></div>

            <div class="col-4 bg-success">
                <form class="text-left" action="registrarUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                    <h1 class="font-weight-bold">{$tituloRegistro}</h1>

                    <div class="form-group font-weight-bold">
                        <label>Usuario (email)</label>
                        <input type="email" name="usernameRegistro" class="form-control" placeholder="Ingrese email">
                    </div>

                    <div class="form-group font-weight-bold">
                        <label>Password</label>
                        <input type="password" name="passwordRegistro" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary font-weight-bold">Registrarme</button>
                </form>
            </div>

            <div class="col-sm"></div>

        </div>
    </div>
</body>

</html>