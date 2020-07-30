<?php
//var_dump($_POST);
//exit;
$numerodocpf = $_POST["cpf"];
$msgretorno = "";

if(strlen($numerodocpf)!=11){
    $msgretorno = "Cpf informado não possui 11 digitos. Você informou o cpf ".$numerodocpf;
} else if(!is_numeric($numerodocpf)){
    $msgretorno = "Informação incorreta!";
} else{
    $msgretorno = "Validado com sucesso!";
}

echo $msgretorno;
//return "cpf";