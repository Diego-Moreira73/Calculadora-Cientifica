<?php
$visor = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $visor = $_POST['visor'] ?? "";
    $tecla = $_POST['tecla'] ?? null;

    if ($tecla === 'Del') {
        $visor = "";
    } elseif ($tecla === '=') {
        $expressao = preg_replace('/[^0-9\.\+\-\*\/\(\)]/', '', $visor);
        try {
            $resultado = eval("return $expressao;");
            $visor = $resultado;
        } catch (Throwable $e) {
            $visor = "Erro";
        }
    } else {
        $visor = $visor . $tecla;
    }
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Neon</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>

    <div class="calculadora">
        
        <h1>Calculadora</h1>

        <form action="calculadora.php" method="post">
            <input type="text" id="display" name="visor" value="<?php echo isset($visor) ? $visor : ''; ?>" readonly>

            <div class="botao-grid">
                
                <button type="submit" name="tecla" value="Del" class="func">Del</button>
                <button type="submit" name="tecla" value="(" class="func">(</button>
                <button type="submit" name="tecla" value=")" class="func">)</button>
                <button type="submit" name="tecla" value="/" class="func">/</button>

                <button type="submit" name="tecla" value="7">7</button>
                <button type="submit" name="tecla" value="8">8</button>
                <button type="submit" name="tecla" value="9">9</button>
                <button type="submit" name="tecla" value="*" class="func">*</button>

                <button type="submit" name="tecla" value="4">4</button>
                <button type="submit" name="tecla" value="5">5</button>
                <button type="submit" name="tecla" value="6">6</button>
                <button type="submit" name="tecla" value="-" class="func">-</button>

                <button type="submit" name="tecla" value="1">1</button>
                <button type="submit" name="tecla" value="2">2</button>
                <button type="submit" name="tecla" value="3">3</button>
                <button type="submit" name="tecla" value="+" class="func">+</button>

                <button type="submit" name="tecla" value="0">0</button>
                <button type="submit" name="tecla" value=".">.</button>
                
                <button type="submit" name="tecla" value="=" class="igual" style="grid-column: span 2;">=</button>
            </div>
        </form>
    </div>

</body>
</html>
