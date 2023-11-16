<?php 

session_start();

include './conexao.php';

$sql = "UPDATE dono SET Telefone = '$_POST[telefoneEditado]',   Email = '$_POST[emailEditado]', 
Senha = '$_POST[senhaEditado]',  CEP = '$_POST[cepEditado]',  Complemento = '$_POST[complementoEditado]', Endereco = '$_POST[enderecoEditado]', Cidade = '$_POST[cidadeEditado]', Estado = '$_POST[estadoEditado]',  WHERE Nome = '$_SESSION[usuario]'";

$result = $conn->query($sql);

echo $sql;

if (!$result){
    echo "<script>
    alert ('Ocorreu um erro, tente novamente.');
    window.location.href = '../pages/EditarPerfil/Editar.php';
    </script>";
}else{
   
    echo "<script>
    alert('Informações atualizadas com sucesso!');
    history.back();
    </script>";
}

?>