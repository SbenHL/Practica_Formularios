<?php
    session_start();
    include ("connect.php");
    $user_id = $_POST["user_id"];
    $sql = "SELECT * from usuarios where id=".$user_id;
    $query = mysqli_query($conn, $sql);
    if (!$row = mysqli_fetch_object($query)){
        echo "Usuario no existe<br>";
        echo "<a href='index.php'>Regresar</a>";
        exit ();
    }

?>

<form method="POST" action="Actualizar.php">
        <input type="hidden" name="user_id" value="<?php echo $row->id?>">
        <div class="row">
            <label>Nombre:</label>
            <input type="text" name="name" value="<?php echo $row->nombre?>"/>            
        </div>
        <div class="row">
            <label>Usuario:</label>
            <input type="text" name="user" value="<?php echo $row->usuario?>"/>
        </div>
        <div class="row">
            <label>Password:</label>
            <input type="password" name="password" value = "<?php echo $row->password?>"/>
        </div>
        <div class="row">
            <button class="btnPrimary" type="submit">Guardar</button>
        </div>
    </form>