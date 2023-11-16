<?php 
 
// importando a conexão com o banco.
include "./conexao.php";

// Linha de comando para inserir os dados do formulário no banco.
$sql = "INSERT INTO dono (email,senha,nome,cpf,telefone,cep,endereco,cidade,estado,nome_pet,raca_pet,porte,quantidade,animal) VALUES ('$_POST[emailDONO]','$_POST[senhaDONO]','$_POST[nomeDONO]','$_POST[CPFDONO]', '$_POST[telefoneDONO]', '$_POST[CEPDONO]','$_POST[enderecoDONO]','$_POST[cidadeDONO]','$_POST[estadoDONO]','$_POST[nomePET]','$_POST[racaPET]', '$_POST[portePET]', '$_POST[quantidadePETDONO]','$_POST[gridRadios]')";

// Resultado da query.
$result = $conn->query($sql);

if ($conn->error){ //Caso reporte um erro, irá voltar para a tela anterior.
    echo "<script>
    alert('Ocorreu um erro, verifique os dados inseridos e tente novamente.');
    console.log($conn->error);
    '$_POST[emailDONO]','$_POST[senhaDONO]','$_POST[nomeDONO]','$_POST[CPFDONO]', '$_POST[telefoneDONO]', $_POST[CEPDONO]','$_POST[enderecoDONO]','$_POST[complementoDONO]','$_POST[cidadeDONO]','$_POST[estadoDONO]','$_POST[nomePET]','$_POST[racaPET]', '$_POST[portePET]', '$_POST[quantidadePETDONO]','$_POST[gridRadios]'
    window.location.href = '../pages/cadastro.php';
    </script>";
}else{ //Caso não ocorra nenhum erro no cadastro.

// Especifica em que pasta o arquivo (nesse caso imagem) vai ser enviado.
$target_dir = "../Uploads/";


// Especifica o caminho do arquivo que vai ser enviado.
$target_file = $target_dir . basename($_FILES["envioDONO"]["name"]);

// Variável de verificação que ainda vai ser usada mais tarde.
$uploadOk = 1;

// Guarda o tipo de arquivo, a extensão dele (deixando em letra minúscula).
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Checar se a imagem é real ou não
if (isset($_POST['submit'])){
    $check = getimagesize($_FILES['envioDONO']['tmp_name']);
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
if ($_FILES['envioDONO']['size']>1000000){
    echo "Desculpe, esse arquivo é muito pesado. Limite de 500KB.";
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
    $filename=$_FILES["envioDONO"]["name"];

    // Variável que recebe a extensão do arquivo.
    $extension=end(explode(".", $_FILES["envioDONO"]["name"]));

    // Cookie para passar a variável de extensão para outra página;
    setcookie('imagem',$extension);
    
    // Operação que insere o arquivo na pasta (nome tmp, diretório, nome do arquivo, extensão do arquivo).
    if (move_uploaded_file($_FILES['envioDONO']['tmp_name'], $target_dir . "$_POST[nomeDONO]." . $extension)){
        echo "<script>
        alert('imagem enviada com sucesso');
        </script>";
    }else{
        echo "<script>
        alert('Desculpe, ocorreu um erro no envio do arquivo.');
        </script>";
    }
    
    echo "<script>
    alert('O arquivo " . htmlspecialchars(basename($_FILES['envioDONO']["name"])) . " foi enviado com sucesso!');
    alert('Cadastrado com sucesso!');
    window.location.href = '../pages/logn.php';
    </script>";
}
}

?>