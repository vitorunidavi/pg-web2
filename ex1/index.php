<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PW2 - Exemplo HTTP + PHP</title>
</head>
<body>
    <h1>PW2 - Exemplo requisições HTTP + PHP - Request</h1>
    <hr>
    <form method="POST" action="destino.php">
        <label for="inome">Nome: </label>
        <input type="text" name="inome" id="inome" placeholder="Informe seu nome">
        <br>
        <label for="ifone">Fone: </label>
        <input type="text" name="ifone" id="ifone" placeholder="(99) 9999-9999">
        <br>
        <label for="iemail">E-mail: </label>
        <input type="text" name="iemail" id="iemail" placeholder="Informe seu e-mail">
        <br>
        <label for="tmensagem">Mensagem: </label>
        <textarea name="tmensagem" id="tmensagem" placeholder="Qual sua mensagem"></textarea>
        <br>
        <br>
        <button type="submit" name="benviar" id="benviar">Enviar</button>
    </form>
    <br>
    Você também pode fazer REQUEST na URL:<br>
    <a href="destino.php?nome=Sandro+Alencar+Fernandes&fone=(47)%2099968-9513&email=sandro@arealocal.com.br">destino.php?nome=Sandro+Alencar+Fernandes&fone=(47)%2099968-9513&email=sandro@arealocal.com.br</a>
</body>
</html>
 <!-- Formulário para enviar os números -->
 <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Calcular Soma</button>
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>