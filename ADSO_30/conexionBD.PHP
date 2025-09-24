//conexion a la base de da datos 
<?php
/*
// Conexión a la base de datos
function conectarBD() {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "usuario_php";
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    return $conn;
}

    */
// Conexión a la base de datos
function conectarBD() {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "usuario_php";

    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos.";
    }

    return $conn;
}
conectarBD();
?>