<?php
session_start();
include_once("conexao.php");

$titulo2 = filter_input(INPUT_POST, 'cargo1', FILTER_SANITIZE_STRING);
$cargo2 = filter_input(INPUT_POST, 'cargo1', FILTER_SANITIZE_STRING);
$habilidades2 = filter_input(INPUT_POST, 'habilidades1', FILTER_SANITIZE_STRING);
$salario2 = filter_input(INPUT_POST, 'salario1', FILTER_SANITIZE_STRING);
$regime2 = filter_input(INPUT_POST, 'regime1', FILTER_SANITIZE_STRING);
$empresa2 = filter_input(INPUT_POST, 'empresa1', FILTER_SANITIZE_STRING);
$beneficios2 = filter_input(INPUT_POST, 'beneficios1', FILTER_SANITIZE_STRING);
$datafim2 = filter_input(INPUT_POST, 'datafim1', FILTER_SANITIZE_STRING);

$query_cadVaga = "INSERT INTO tb_vagas (titulo, habilidades, cargo, salario, regime, empresa, beneficios, datafim) VALUES ('$titulo2','$habilidades2', '$cargo2', '$salario2', '$regime2', '$empresa2', '$beneficios2', '$datafim2')";
$resultado_query = mysqli_query($conexao,$query_cadVaga);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: index.php");
}else{
$_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: index.php");
}


?>
