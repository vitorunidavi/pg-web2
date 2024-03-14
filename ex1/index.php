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
        <label for="iendereco">Endereço: </label>
        <input type="text" name="iendereco" id="iendereco" placeholder="Informe seu endereço">
        <br>
        <label for="imoradia">Moradia: </label>
        <select name="imoradia" id="imoradia">
            <option value="casa">Casa</option>
            <option value="apartamento">Apartamento</option>
            <option value="outro">Outro</option>
        </select>
        <br>
        <label for="tmensagem">Mensagem: </label>
        <textarea name="tmensagem" id="tmensagem" placeholder="Qual sua mensagem"></textarea>
        <br>
        <br>
        <button type="submit" name="benviar" id="benviar">Enviar</button>
    </form>
</body>
</html>
<h1>olá mundo</h1>
