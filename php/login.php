<?php
require("../banco/conecta.php");
session_start();
$senha = $_POST['senha'];
$login = $_POST['usuario'];

$login = preg_replace('/[^[:alnum:]_.-]/', '', $login);
$senha = addslashes($senha);

$query = "SELECT * FROM tb_admin WHERE nm_admin ='$login' AND ds_senha = '$senha'";
$result = mysqli_query($conexao, $query);
echo $query;
if (mysqli_num_rows($result) == 1) {
    $_SESSION['acesso'] = "admin";
    header('location:../inicio.php');
} else {
    echo "<script>alert('Usuário ou senha inválido, revise os campos!')</script>"
    header('location:../index.php');
}