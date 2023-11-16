<?php 

// Importe a conexão com o banco.
include "./conexao.php";

// Inicio da sessão.
session_start();

//Query para buscar o Nome e a Senha no banco. 
$sql = "SELECT * FROM dono WHERE Nome = '$_POST[nomeLogin]' AND Senha = '$_POST[senhaLogin]'";

// Variável com o resultado da busca.
$result = $conn->query($sql);

if ($result->num_rows==0){//Caso não haja resultados, reporte um erro e volte para a tela anterior.
    echo "<script>
    alert('Login ou senha inválidos!');
    window.location.href = '../pages/logn.php';
    </script>";
}
else{ //Caso haja resultados, crie uma super global para validar o login do usuário.
    $_SESSION['usuario'] = $_POST['nomeLogin'];
    echo "<script>
    alert('Login realizado com sucesso!');
    window.location.href = '../index.php';
    </script>";
}

?>