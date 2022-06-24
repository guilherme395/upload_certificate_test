<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body>

        <center>
            <h1>LOGIN PAGE</h1>
        </center>

        <br>
        <br>

        <center>
        <form action="../BACK-END/check_data.php" method="post" autocomplete="off">
                <div>

                    <h3>Nome:</h3>

                    <input class="" type="text" name="name" id="name">

                </div>

                <br>

                <div>

                    <h3>Senha:</h3>

                    <input class="" type="password" name="password" id="password">

                </div>

                <br>

                <div class="d-grid gap-2 col-1 mx-auto">
                    <button class="btn btn-primary" type="submit">Entrar</button>
                </div>
            </form>
        </center>
        
    </body>
</html>