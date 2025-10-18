<?php
// Introducción: Este script PHP realiza la suma de dos números ingresados en un formulario HTML.
// Procesa la solicitud mediante el método POST, valida los datos, calcula la suma y muestra el resultado.

session_start();

// Verificar si la solicitud se realizó a través del método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtener valores enviados desde el formulario y convertirlos a números flotantes
    $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;

    // Realizar la suma
    $result = $numero1 + $numero2;

    // Generar la respuesta HTML para mostrar el resultado
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head><meta charset='UTF-8'><title>Resultado</title></head>";
    echo "<body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>";
    echo "<div style='max-width: 400px; margin: auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);'>";

    echo "<h2>Resultado de la Suma</h2>";
    echo "<p><strong>Primer Número:</strong> $numero1</p>";
    echo "<p><strong>Segundo Número:</strong> $numero2</p>";
    echo "<p><strong>Resultado:</strong> $result</p>";

    echo "<a href='index.html' style='display: inline-block; margin-top: 20px; text-decoration: none; color: white; background-color: #007BFF; padding: 10px 20px; border-radius: 5px;'>Volver</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Acceso no permitido.";
}
