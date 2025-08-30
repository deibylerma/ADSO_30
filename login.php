<?php
// login.php

// Usuarios y contraseñas de ejemplo (puedes cambiarlo o conectarlo a una base de datos)
$usuarios_validos = [
    "brayan" => "12345",
    "admin"  => "admin123"
];

// Verificar si el formulario envió datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $clave   = $_POST['clave'] ?? '';

    // Validar
    if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] === $clave) {
        echo "<h2>Bienvenido, $usuario</h2>";
    } else {
        echo "<h2>Usuario o contraseña incorrectos</h2>";
        echo '<a href="tu_formulario.php">Volver</a>';
    }
} else {
    echo "Acceso no permitido.";
}
?>
