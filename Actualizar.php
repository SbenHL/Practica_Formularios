<?php
    include ('conexion.php');
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $username = $_POST["user"];
    $password = $_POST["password"];

 
        $sql = "UPDATE usuarios set 
        nombre = '".$name."', usuario='".$username."' where id=".$user_id;
    
 
        $sql = "UPDATE usuarios set 
        nombre = '".$name."', usuario='".$username."', password='".$password."' where id=".$user_id;



    
    if ($query = mysqli_query($conn, $sql))
        header("Location: Mostrar_datos.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='Mostrar_datos.php'>Regresar</a>";
    }
?>