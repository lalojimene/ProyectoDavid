<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculadora {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .resultado {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora </h2>
        <form method="post">
            <label>Número 1:</label>
            <input type="number" name="num1" required>

            <label>Número 2:</label>
            <input type="number" name="num2" required>

            <label>Operación:</label>
            <select name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
            </select>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
            $resultado = 0;

            if ($operacion == "sumar") {
                $resultado = $num1 + $num2;
            } elseif ($operacion == "restar") {
                $resultado = $num1 - $num2;
            }

            echo "<div class='resultado'><strong>Resultado:</strong> $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
