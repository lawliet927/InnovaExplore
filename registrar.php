<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['ID'];
    $usuario = $_POST['idusuario'];
    $email = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar la contraseña

    $sql = "INSERT INTO usuarios (usuario,idusuario,correo, password) VALUES ( '$usuario', '$idusuario','$correo', '$password')";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro exitoso";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>
