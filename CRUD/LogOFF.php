<?php 

// Inicio da sessão.
session_start();

// Deletar a super global responsável pelo login.
unset($_SESSION['usuario']);

// Manda o usuário para a tela inicial.
echo "<script>
alert('LogOff realizado com êxito.');
history.back();
</script>"

?>