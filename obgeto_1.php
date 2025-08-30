<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

    <form action="login.php" method="post">
        <h1>Iniciar sesión</h1>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required><br><br>

        <input type="submit" value="Entrar">
    </form>


    <?php
    class Persona {
        private $nombre;
        public function inicializar($nom) {
            $this->nombre = $nom;
        }
        public function imprimir() {
            echo $this->nombre;
            echo '<br>';
        }
    }

    $per1 = new Persona();
    
    $per1->inicializar('<h1>Juan</h1>');
    $per1->imprimir();
    ?>
</body>
</html>
