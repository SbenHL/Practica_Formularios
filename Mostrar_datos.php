
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuarios</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tabla de Usuarios</h1>
    </header>
    <a href="registrar.php">Registrar</a>
    <br>
    <a href="index.php">Pagina Principal</a>
    <br>
    <br>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php

            if ($conn = mysqli_connect("localhost", "root", "", "prac_usuarios")) {
                $query = mysqli_query($conn, "SELECT * FROM usuarios");
                while ($row = mysqli_fetch_object($query)) {
                    echo "<tr><td> {$row->nombre}</td><td> {$row->usuario}</td><td> {$row->password}</td><td>
                    <form method='POST' action='Eliminar.php'><button type='submit'>Eliminar</button>
                    <input type='hidden' name='user_id' value='".$row->id."'/></form>
                    <form method='POST' action='alojardatos.php'>
                    <input type='hidden' name='user_id' value='".$row->id."'>
                    <button type='submit'>Actualizar</button>
                    </form></td></tr>";
                }
            } else {
                echo "no se pudo conectar";
            }

            ?>
        <tbody>
    </table>
</body>

</html>