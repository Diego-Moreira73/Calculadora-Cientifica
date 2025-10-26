<head>
  <title>Calculadora Científica</title>
  <link rel="stylesheet" href="calculadora.css">
</head>

<body>
  <h1>Calculadora Científica</h1>
  <form method="post" action="calculadora.php">
    <input type="text" name="num1" placeholder="Digite o número 1" required>

    <select name="operacoes">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="sqrt">√</option>
      <option value="pow">x²</option>
      <option value="log">log</option>
    </select>

    <input type="text" name="num2" placeholder="Número 2 (se necessário)">
    <button type="submit" name="calcular">Calcular</button>
  </form>

</body>
</html>