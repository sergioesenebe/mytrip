<?php
// Configuración de la base de datos (lee de variables de entorno)
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');
echo $db_host;
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
