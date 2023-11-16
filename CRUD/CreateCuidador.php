<?php 

// Incluindo a conexão com o banco de dados.
include './conexao.php';

// Muda a query caso a pessoa tenha um complemento ou não
if (isset($_POST['complementeCUIDADOR'])){
    
    // Query para inserir os dados na tabela de cuidadores.
    $sql = "INSERT INTO cuidador (email,senha,nome,cpf,telefone,cep,endereco,complemento,cidade,estado,quantidade,animal) VALUES ('$_POST[emailCUIDADOR]','$_POST[senhaCUIDADOR]','$_POST[nomeCUIDADOR]','$_POST[CPFCUIDADOR]','$_POST[telefoneCUIDADOR]','$_POST[CEPCUIDADOR]','$_POST[enderecoCUIDADOR]','$_POST[complementeCUIDADOR]','$_POST[cidadeCUIDADOR]','$_POST[estadoCUIDADOR]','$_POST[quantidadeCUIDADOR]','$_POST[gridRadios]')";
    
    // Resultado da query.
    $result = $conn->query($sql);
}else{
    
    // Query para inserir os dados na tabela de cuidadores.
    $sql = "INSERT INTO cuidador (email,senha,nome,cpf,telefone,cep,endereco,cidade,estado,quantidade,animal) VALUES ('$_POST[emailCUIDADOR]','$_POST[senhaCUIDADOR]','$_POST[nomeCUIDADOR]','$_POST[CPFCUIDADOR]','$_POST[telefoneCUIDADOR]','$_POST[CEPCUIDADOR]','$_POST[enderecoCUIDADOR]','$_POST[cidadeCUIDADOR]','$_POST[estadoCUIDADOR]','$_POST[quantidadeCUIDADOR]','$_POST[gridRadios]')";
    
    // Resultado da query.
    $result = $conn->query($sql);
}


if ($conn->error){ //Caso reporte um erro, irá voltar para a tela anterior.
    echo "<script>
    alert('Ocorreu um erro, verifique os dados inseridos e tente novamente.');
    alert('".$conn->error."');
    window.location.href = '../pages/cadastro.php';
    </script>";
}else{ //Caso não ocorra nenhum erro no cadastro.

// Especifica em que pasta o arquivo (nesse caso imagem) vai ser enviado.
$target_dir = "../Uploads/";


// Especifica o caminho do arquivo que vai ser enviado.
$target_file = $target_dir . basename($_FILES["envioCUIDADOR"]["name"]);

// Variável de verificação que ainda vai ser usada mais tarde.
$uploadOk = 1;

// Guarda o tipo de arquivo, a extensão dele (deixando em letra minúscula).
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Checar se a imagem é real ou não
if (isset($_POST['submit'])){
    $check = getimagesize($_FILES['envioCUIDADOR']['tmp_name']);
    if ($check !== false){
        echo "O arquivo é uma imagem " . $check["mime"] . ".";
        $uploadOk = 1;
    }else{
        echo "O arquivo não é uma imagem!";
        $uploadOk = 0;
    }
}

// Checar se o arquivo ja existe.
if (file_exists($target_file)){
    echo "Desculpe, esse arquivo ja existe.";
    $uploadOk = 0;
}

// Limitar o tamanho do arquivo (máximo de 1MB).
if ($_FILES['envioCUIDADOR']['size']>1000000){
    echo "Desculpe, esse arquivo é muito pesado. Limite de 1MB.";
    $uploadOk = 0;
}

// Limitar os tipos de arquivos (permitir apenas jpg, jpeg e png).
if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"){
    echo "Desculpe, aceitamos apenas arquivos '.jpg', '.jpeg' ou '.png'.";
    $uploadOk = 0;
}

// Checar se houve algum erro no envio.
if ($uploadOk == 0){
    echo "Desculpe, houve um erro!";
    // Se ocorreu tudo certo, vai tentar enviar o arquivo.
}else{

    // Variável que recebe o nome completo do arquivo.
    $filename=$_FILES["envioCUIDADOR"]["name"];

    // Variável que recebe a extensão do arquivo.
    $extension=end(explode(".", $_FILES["envioCUIDADOR"]["name"]));

    // Cookie para passar a variável de extensão para outra página;
    setcookie('imagem',$extension);
    
    // Operação que insere o arquivo na pasta (nome tmp, diretório, nome do arquivo, extensão do arquivo).
    if (move_uploaded_file($_FILES['envioCUIDADOR']['tmp_name'], $target_dir . "$_POST[nomeCUIDADOR]." . $extension)){
        echo "<script>
        </script>";
    }else{
        echo "<script>
        Desculpe, ocorreu um erro no envio do arquivo.
        </script>";
    }
    
    echo "<script>
    alert('O arquivo " . htmlspecialchars(basename($_FILES['envioCUIDADOR']["name"])) . " foi enviado com sucesso!');
    alert('Cadastrado com sucesso!');
    window.location.href = '../pages/logn.php';
    </script>";
}
}

?>