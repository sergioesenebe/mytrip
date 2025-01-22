<?php
// Configuración de la base de datos (lee de variables de entorno)
$db_host = getenv('DB_HOST') ?: 'sql100.infinityfree.com';
$db_user = getenv('DB_USER') ?: 'if0_38155330';
$db_password = getenv('DB_PASSWORD') ?: 'dx9PbmLh9xyl2';
$db_name = getenv('DB_NAME') ?: 'if0_38155330_mytrip';

// Mostrar mensaje de inicio
echo "<h1>¡Tu página PHP está funcionando!</h1>";

// Intentar conexión a la base de datos
echo "<h2>Verificando conexión a la base de datos...</h2>";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    echo "<p style='color: red;'>Error de conexión: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color: green;'>Conexión exitosa a la base de datos</p>";
    $conn->close();
}
?>
