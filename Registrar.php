
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <style>
        form{
            width: 50%;
            margin: 0 auto;
            background-color: blanchedalmond;
        }
        .header{
            width: 50%;
            margin: 0 auto;
        }
        .title{
            text-align: center;
        }
        .row{
            display: flex;
            justify-content: baseline;
            gap: 10px;
            padding: 10px;
        }
        .btnPrimary{
            border: 1px solid ivory;
            border-radius: 5px;
            padding: 5px 10px;
            color: ivory;
            background-color: blue;
        }
        input{
            border: 1px solid gray;
            padding: 5px;
            border-radius: 10px;
        }
        .lista{
            justify-content: center;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1 class="title">Formulario Registrar Usuarios</h1>
        
    </header>
    <br>
    <main>
        <form method="POST" action="guardar.php">
            <div class="row">
                <label>Nombre:</label>
                <input type="text" name="name"/>
                
            </div>
            <div class="row">
                <label>Usuario:</label>
                <input type="text" name="user" required/>
            </div>
            <div class="row">
                <label>Password:</label>
                <input type="password" name="password" required/>
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Guardar</button>
            </div>
        </form>

    </main>
    <footer>
        <h4 class="title">Elaborado por SABDIEL BENALI HERNANDEZ LOPEZ</h4>
        <div>
            <ul class="lista">
                <li><a href="index.php">Pagina Principal</a></li>
                <br>
                <li><a href="Mostrar_datos.php">Mostrar tabla Usuarios</a></li>
                <br>
            </ul>      
                    
        </div>
    </footer>
</body>
</html>