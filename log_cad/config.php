<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-aps';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*     if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
 */

?>



<!--  if(isset($_POST['submit']))
{
  print_r('login: ' . $_POST['login']);
  print_r('<br>');
  print_r('senha: ' . $_POST['senha']);
  */
/* include_once('config.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO formulario(login,senha) VALUES ('$login','$senha')");  -->