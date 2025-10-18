<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;

    $operacion = isset($_POST['operacion']) ? strval($_POST['operacion']) : '';

    $resultado = 0;

    $mensaje = "";

    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            $mensaje = "Suma";
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            $mensaje = "Resta";
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            $mensaje = "Suma";
            break;
        case 'division':
            if ($numero2 == 0) {
                $mensaje = "No se puede dividir entre cero";
            } else {
                $resultado = $numero1 / $numero2;
                $mensaje = "Division";
            }
            break;
        default:
            $mensaje = "Operacion no valida";
    }
}

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head><meta charset='UTF-8'><title>Resultado</title></head>";
echo "<body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>";
echo "<div style='max-width: 400px; margin: auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);'>";

echo "<h2>Resultado de la {$mensaje}</h2>";
echo "<p><strong>Primer Número:</strong> $numero1</p>";
echo "<p><strong>Segundo Número:</strong> $numero2</p>";
echo "<p><strong>Resultado:</strong> $resultado</p>";

echo "<a href='index.html' style='display: inline-block; margin-top: 20px; text-decoration: none; color: white; background-color: #007BFF; padding: 10px 20px; border-radius: 5px;'>Volver</a>";
echo "</div>";
echo "</body>";
echo "</html>";

?>