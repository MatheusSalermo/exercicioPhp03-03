


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Você pode tirar a sua CNH?</title>
</head>
<body>
    <center>
    <form method="post" action="verifica.php">
    <label>Digite seu nome</label>
    <br>
    <input type="text" id="txtNome" name="txtNome"/>
    <br>
    <label>Digite o seu cpf</label>
    <br>
    <input type="text" id="txtCpf" name="txtCpf"/>
    <br>
    <label>Digite o ano de nascimento</label>
    <br>
    <input type="text" id="txtAno" name="txtAno"/>
    <br>
    <label>Escolha a categoria da carta</label>
    <br>
    <select name="slCategoria" id="slCategoria" style="width:175px"> 
    
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
        <option value="4">D</option>
        <option value="5">E</option>
    </select>
    <br>
    <input type = "checkbox" id = "aniversario" name = "cbAniversario" value = "aniversario"/>
    <label> Você ja fez aniversário este ano? </label>
    <br>
    <input type="submit" value="Verificar">

</form>
</center>
</body>
</html>


