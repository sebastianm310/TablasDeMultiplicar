<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tablas</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <h2>Generador de tablas de multiplicar</h2>
            <input type="number" name="numero" placeholder="Ingresa el numero de tabla" class="entrada" required>
            <input type="number" name="repeticiones" placeholder="Ingresa repeticiones" class="entrada" required min="1" max="100">
            <input type="submit" value="Generar" class="boton">
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
                $numero = $_POST['numero'];
                $repeticiones = $_POST['repeticiones'];
                if($repeticiones >= 1 && $repeticiones <= 100) {
                    echo "<table border='2'>";
                    echo "<thead><th colspan='5'>La tabla del ".htmlspecialchars($numero)."</th></thead>";
                    echo "<tbody>";
                    for($i = 1; $i <= $repeticiones; $i++) {
                        echo "<tr>";
                            echo "<td>".htmlspecialchars($numero)."</td>";
                            echo "<td> * </td>";
                            echo "<td>".htmlspecialchars($i)."</td>";
                            echo "<td>=</td>";
                            echo "<td>".htmlspecialchars($numero*$i)."</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<div class='mensaje'><h3>Entrada inválida de repeticiones</h3></div>";
                }
                
            } else {
                echo "<div class='mensaje'><h3>Aún no ingresas nada</h3><div>";
            }
            echo "Soy un cambio";
        ?>
    </body>
</html>
