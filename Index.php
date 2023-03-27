<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>
<title>Formulario de accceso</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">

</head>

<body>

    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <form method="post" action="./db/Functions.php" class="form-register">
                    <h4>Acceso</h4>
                    <input class="form-control" type="email" name="usr" id="exampleInputEmail"
                        placeholder="Emaail-User"><br><br>
                    <input class="form-control" type="password" name="pss" id="exampleInputPassword1"
                        placeholder="Password"><br><br>
                    <input class="form-control" type="submit" name="submit" id="submi" placeholder="Submit"><br><br>

                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Bienvenido
                </div>
                <hr>
                <div class="pie-form">
                    <a href="#">¿Perdiste tu contraseña?</a>
                    <a href="#">¿No tienes Cuenta? Registrate</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>