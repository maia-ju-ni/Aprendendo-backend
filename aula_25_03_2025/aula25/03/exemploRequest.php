<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO - FORMULÁRIOS</title>
</head>
<body>
    <FORM method="POST" action="salvar.php? action=save" name="meuForm">
    Nome: <input type="text" name=CAMPO_NOME>
    <br>
    <br>
    Idade: <input type="text" name=CAMPO_IDADE>
    <br>
    <br>
    E-mail: <input type="text" name=CAMPO_EMAIL>
    <br>
    <br>
    Sexo: <input type="radio" name="CAMPO_SEXO" value="M">Masculino
          <input type="radio" name="CAMPO_SEXO" value="F">Feminino
    <br>
    <br>
    Curso: <select name=CAMPO_CURSO>
            <option selected>Selecione...</option>
            <option>Ciências da Computação</option>
            <option>Bacharelado em Informática</option>
            <option>Engenharia da Computação</option>
            </select>
    <br>
    <br>
    Conhecimentos: <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="word">Microsoft Word
                   <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="HTML">HTML
                   <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="JS">JavaScript
                   <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="PHP">PHP
    <br>
    <br>
    <input type=RESET value="Limpar">
    <input type=SUBMIT value="Enviar">
    
    </FORM>
    
</body>
</html>