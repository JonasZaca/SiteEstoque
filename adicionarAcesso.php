<?php
include('conexao/check.php');
if (isset($_POST['btnsalvar'])) {
	$cliente=array(
	'id'=>$_POST['id'],
    'email'=>$_POST['email'],
    'senha'=>$_POST['senha'],
	'status'=>$_POST['status'],
		);
	$grava=DBCreate('acesso', $cliente);
	header("Location: lerAcesso.php");	
}
?>

<!DOCTYPE html>
<html>
<head>
<style> 
input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

form {
    /* Apenas para centralizar o form na página */
    margin: 0 auto;
    width: 400px;
    /* Para ver as bordas do formulário */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}
P { text-align: center }
</style>
</head>
<body>

<p>Cadastro de Usuários:</p>

<form action="" method="post" name="cadastro">
    <div>
        <label >Email:</label>
        <input type="text" id="email" name="email" />
    </div>
    <div>
        <label >Senha:</label>
        <input type="password" id="senha" name="senha" />
    </div>
    <div>
        <label >Status:</label>
        <input type="text" id="status" name="status" />
    </div>
    
    <div class="button">
        <button type="submit" name="btnsalvar">Salvar</button>
    </div>

<p style="text-align: right"><a href="lerAcesso.php">voltar</a> </p>
</form>

</body>
</html>