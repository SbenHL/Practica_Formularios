
<?php
    session_start();
    include ('conexion.php');
    $user = $_POST["name"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM usuarios where Usuario='".$user."' && Password='".$password."'";
    $query = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_object($query)){
        
        $_SESSION["logged"] = true;
        $_SESSION["user_id"]  = $row->ID;
        $_SESSION["displayName"] = $row->Nombre;
        $_SESSION["user"] = $row->Usuario;

        header("Location: Mostrar_datos.php");
    }
    else{
        echo "Datos no válidos<br>";
        echo "<a href='login.php'>Regresar</a>";
    }
?>