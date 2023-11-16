<?php 

include "./conexao.php";

$sql = "SELECT Cep, Animal, Nome, Endereco FROM cuidador";

$result = $conn->query($sql);

$ceps = [];

if ($result->num_rows>0){
    while ($rows = $result->fetch_assoc()){
        $ceps[] = $rows;
    }
}

echo json_encode($ceps);

?>