<?php
//strlen está sendo usada para verificar o tamanho do nome
// || é um operador lógico que significa "ou"
if($_REQUEST["action"]=="save")
{
    $formValid=true;

    $tamanho_nome=strlen($_POST["CAMPO_NOME"]);
    if($tamanho_nome<5 || $tamanho_nome>64)
    {
        echo("O campo 'Nome' deve ter entre 5 e 64 caracteres.".$tamanho_nome);
        $formValid=false;
    }

    //funcão is_NaN(is not a number), que informa se o valor passado NÃO é um número

    $idade=(int)$_POST["CAMPO_IDADE"];
    if(is_NaN($idade) || $idade<4 || $idade>120)
    {
        echo("O campo 'Idade' deve ser preenchido corretamente.");
        $formValid=false;
    }

    $email=$_POST["CAMPO_EMAIL"];
    $regex="/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
    if(!preg_match($regex,$email))
    //preg_match é uma função que verifica se uma expressão regular está presente em uma string
    {
        echo("O campo 'E-mail' deve ser preenchido corretamente.");
        $formValid=false;
    }
    $sexo=$_POST["CAMPO_SEXO"];
    if($sexo != "M" && $sexo !="F")
    {
        echo("O campo 'Sexo' deve ser preenchido.");
        $formValid=false;
    }

    $curso=$_POST["CAMPO_CURSO"];
    IF($curso==""||$curso=="Selecione...")
    {
        echo("O campo 'Curso' deve ser preenchido.");
        $formValid=false;
    }

    $conhecimentos=$_POST["CAMPO_CONHECIMENTOS"];
    if(sizeof($conhecimentos)!=2)
    {
        echo("necessário marcar 2 conhecimentos");
        $formValid=false;
    }
    if($formValid)
    {
        echo "Formulário validado com sucesso!";
        exit();
    }
    else{
        header("Location:exemploRequest.php");
    }

}




?>