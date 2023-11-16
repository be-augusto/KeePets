<?php 

include "./conexao.php";

$sql = "INSERT INTO mensagens VALUES ('$_POST[emailFooter]','$_POST[assuntoFooter]','$_POST[mensagemFooter]')";

$result = $conn->query($sql);

if ($result){
    echo "<script>
    alert('E-mail enviado com sucesso. Obrigado!');
    history.back();
    </script>";
}


?>