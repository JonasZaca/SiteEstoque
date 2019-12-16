<?php  	include("conexao/check.php"); // inclusão da conexão e funções 
if (isset($_POST['btnsalvar'])) {
	$id=$_POST["id"];
	$cliente=array(
	'marca'=>$_POST['marca'],
	'modelo'=>$_POST['modelo'],
	'ano'=>$_POST['ano'],
	'placa'=>$_POST['placa']
		);
	$grava=DBUpdate('carro', $cliente, "id_carro='$id'");
	header("Location: ler.php");	
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

<p>Cadastro de Carros:</p>

<form action="" method="post" name="cadastro">
<?php 
		$id = $_GET["codigo"];	// dados enviado do outro formulario
		$fbusca="where id_carro='$id'" ; // criação da busca dos dados
		$clientes = DBRead('carro',$fbusca, '*' );// chamado da função busca.
		if (!isset($clientes) || $clientes == false){ // teste se encontrou algo
			}else{
				foreach($clientes as $dado){ // loop que mostra a matriz
?>
	<div>
        
        <input  id="id" type="hidden" name="id" value="<?php echo $dado['id_carro']; ?>" />
    </div>
    <div>
        <label >Marca:</label>
        <input type="text" id="marca" name="marca" value="<?php echo $dado['marca']; ?>" />
    </div>
    <div>
        <label >Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?php echo $dado['modelo']; ?>"/>
    </div>
    
    <div>
        <label >Ano:</label>
        <input type="text" id="ano" name="ano" value="<?php echo $dado['ano']; ?>"/>
    </div>
    <div>
        <label >Placa:</label>
        <input type="text" id="placa" name="placa" value="<?php echo $dado['placa']; ?>"/>
    </div>
			<?php  }} // fechamento do loop?>
    <div class="button">
       <button type="submit" name="btnsalvar">Salvar</button>
    </div>

<p style="text-align: right"><a href="ler.php">voltar</a> </p>
</form>

</body>
</html>