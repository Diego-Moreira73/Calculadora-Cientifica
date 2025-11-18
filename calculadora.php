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