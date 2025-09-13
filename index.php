<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tablas</title>
        <style>
            body {
                background: #454545;
            }
            * {
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form {
                color: white;
                display: flex;
                /*justify-content: center;*/
                align-items: center;
                flex-direction: column;
                width: 20%;
                margin: 10px auto;
                text-align: center;
                background-color: #303030;
                padding: 10px;
                border-radius: 10px;
            }
            input {
                padding: 5px;
                margin: 8px;
                text-decoration: none;
                border: none;

            }
            h3 {
                text-align: center;
                padding: 0;
                margin: 0;
            }
            .entrada {
                width: 70%;
                height: 25px;
                border-radius: 5px;
                text-align:center;
                background-color: #595959;
                color: white;
            }
            .entrada::placeholder{
                justify-content: center;
                color: white;
            }
            .boton {
                border-radius: 8px;
                justify-content: center;
                width: 50%;
                background-color: #20C962;
                color: white;
            }
            .boton:hover {
                cursor:pointer;
                background-color: #0F6131;
            }
            table, th, tr, td {
                border-radius: 6px;
                text-align: center;
            }
            table {
                margin: 0 auto;
                width: 25%;
                color: white;
               
            }
            thead {
                background-color: #303030;
                
            }
            td {
                background-color: #595959;
            }
            .mensaje {
                width: 40%;
                margin: 0 auto;
                background-color: #595959;
                padding: 20px;
                color: white;
                border-radius: 8px;
            }

        </style>
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
        ?>
    </body>
</html>