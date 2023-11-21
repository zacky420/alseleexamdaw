<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Componentes</title>
    <link rel="stylesheet" href="/www/estilos.css">
    <style>
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    background: linear-gradient(to bottom, #b3e0ff, #f5f5f5);
    margin: 0;
    padding: 20px;
}
.persona {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    border-radius: 8px;
}

.persona .nombre {
    width: 40%;
    font-weight: bold;
    color: #333;
}

.persona .edad {
    width: 20%;
    color: #555;
}

.persona .estilo {
    width: 40%;
    color: #888;
}

.info {
    font-size: 14px;
    color: #666;
    margin-top: 10px;
}

.link {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

.link:hover {
    text-decoration: underline;
    color: #0056b3;
}

.persona:hover {
    border-color: #007bff;
}

/* Estilo para el nombre cuando es una coincidencia exacta */
.persona .nombre {
    width: 40%;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

/* Estilo para la edad con un ícono */
.persona .edad {
    width: 20%;
    color: #555;
}
.persona .edad::before {
    content: '\1F464'; /* Ícono de persona */
    margin-right: 5px;
}

/* Estilo para el estilo, utilizando una fuente diferente */
.persona .estilo {
    width: 40%;
    color: #888;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

 </style>
</head>
<body>
    <?php
   $host = 'database';
   $user = 'fiumba';
   $password = 'fiumba';
   $db = 'alsele';
   
   $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_error) {
        echo 'Conexión Fallida Mi negro';
    }

    $resultado = $conn->query("SELECT * FROM persona");

    if (!$resultado) {
        die("Error en la consulta: " . $conn->error);
    }

    $rows = [];
    while ($fila = $resultado->fetch_assoc()) {
        $rows[] = $fila;
    }

    foreach ($rows as $fila) {
        echo "<div class='persona'>";
        echo "<p class='nombre'>Nombre: " . $fila['nombre'] . '</p>';
       
        echo "<p class='edad'>Edad: " . $fila['edad'] . '</p>';
    
        echo "<p class='estilo'>Estilo: " . $fila['estilo'] . '</p>';
        echo "</div>";
        echo "<hr>";
    }

    echo "<p class='info'>Versión Apache: " . apache_get_version() . '</p>';
    echo "<p class='info'>Versión PHP: " . phpversion() . '</p>';
    echo "<a class='link' href='http://localhost:8000'>phpMyAdmin</a>";
    ?>

</body>
</html>
