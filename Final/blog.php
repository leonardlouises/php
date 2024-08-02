
<?php
    session_start();
    if(isset($_POST['nombre'])){
        $_SESSION['nombre'] = $_POST['nombre'];
    }
    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
    }
    else{
        header("Location: login.php");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Arial;
        }
        #contenido{
            width: 1000px;
            height: 600px;
            margin: 20px auto;
            text-align: center;
            box-shadow: 1px 1px 4px gray;
            border-radius: 5px;
        }
        header{
            height: 50px;
            padding-top: 10px;
            background-color: dodgerblue;
            border-radius: 5px 5px 0 0;

        }
        h1{
            display: inline;
            color: white;
        }
        #sesion{
            display: inline;
            margin-left: 700px;
        }
        #usuario{
            width: 110px;
            background-color: transparent;
            border: none;
            color: white;
        }
        a{
            text-decoration: none;
            color: white;
            border-radius: 5px;
            border: 1px solid white;
            padding: 2px;
        }
        form{
            width: 1000px;
            height: 80px;
            border-radius: 0 0 5px 5px;
            background-color: white;
            position: fixed;
            bottom: 21px
        }
        form input{
            width: 700px;
            height: 2px;
            border-radius: 20px;
            border: none;
            padding: 20px;
            box-shadow: 1px 1px 4px gray;
        }
        button{
            padding: 13px;
            border-radius: 20px;
            border: none;
            color: white;
            background-color: dodgerblue;
            box-shadow: 1px 1px 4px gray;
        }
        th, td{
            width: 400px;
        }
        td.mensaje{
            border-radius: 10px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div id="contenido">
        <header>
            <h1>Blog</h1>
            <a href="blog.php">🔄</a>
            <div id="sesion">
                <input type="text" id="usuario" value="<?php echo 'Usuario: ' . $nombre; ?>" disabled>
                <a href="logout.php">Salir</a>
            </div>
        </header>
        <section>
            <?php
            
                include("conexion.php");

                $sentencia = "SELECT * FROM BLOG;";

                $resulset = $conexion->query($sentencia);

                if($resulset->num_rows > 0){
                    echo "<table>";
                    echo "<thead><tr><th>Usuario</th><th>Mensaje</th></tr></thead><tbody>";
                    while($f = $resulset->fetch_assoc()){
                        $usuario = $f['USUARIO'];
                        $mensaje = $f['MENSAJE'];
                        echo "<tr><td>$usuario</td><td class='mensaje'>$mensaje</td></tr>";
                    }
                    echo "</tbody></table>";
                }
            ?>
            <form action="blogController.php" method="post">
                <hr><br>
                <input type="text" name="mensaje" required>
                <button type="submit"><img src="">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>