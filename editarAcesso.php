<?php  	include("conexao/check.php"); // inclusão da conexão e funções 
if (isset($_POST['btnsalvar'])) {
	$id=$_POST["id"];
	$cliente=array(
	'id'=>$_POST['id'],
    'email'=>$_POST['email'],
    'senha'=>$_POST['senha'],
	'status'=>$_POST['status'],
		);
	$grava=DBUpdate('acesso', $cliente, "id='$id'");
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

<p>Cadastro de Usuarios:</p>

<form action="" method="post" name="cadastro">
<?php 
		$id = $_GET["codigo"];	// dados enviado do outro formulario
		$fbusca="where id='$id'" ; // criação da busca dos dados
		$clientes = DBRead('acesso',$fbusca, '*' );// chamado da função busca.
		if (!isset($clientes) || $clientes == false){ // teste se encontrou algo
			}else{
				foreach($clientes as $dado){ // loop que mostra a matriz
?>
	<div>
        
        <input  id="id" type="hidden" name="id" value="<?php echo $dado['id']; ?>" />
    </div>
    <div>
        <label >Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $dado['email']; ?>" />
    </div>
    <div>
        <label >Senha:</label>
        <input type="password" id="senha" name="senha" />
    </div>
    <div>
        <label >Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $dado['status']; ?>"/>
    </div>
    <div>
    
			<?php  }} // fechamento do loop?>
    <div class="button">
       <button type="submit" name="btnsalvar">Salvar</button>
    </div>

<p style="text-align: right"><a href="lerAcesso.php">voltar</a> </p>
</form>

</body>
</html>