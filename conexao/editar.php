<?php  	include("conexao/check.php"); // inclusão da conexão e funções 
if (isset($_POST['btnsalvar'])) {
	$id=$_POST["id"];
	$cliente=array(
	'name'=>$_POST['name'],
	'position'=>$_POST['position'],
	'office'=>$_POST['office'],
	'salary'=>$_POST['salary']
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
        <label >Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $dado['name']; ?>" />
    </div>
    <div>
        <label >Position:</label>
        <input type="text" id="position" name="position" value="<?php echo $dado['position']; ?>"/>
    </div>
    
    <div>
        <label >Office:</label>
        <input type="text" id="office" name="office" value="<?php echo $dado['office']; ?>"/>
    </div>
    <div>
        <label >Salary:</label>
        <input type="text" id="salary" name="salary" value="<?php echo $dado['salary']; ?>"/>
    </div>
			<?php  }} // fechamento do loop?>
    <div class="button">
       <button type="submit" name="btnsalvar">Salvar</button>
    </div>

<p style="text-align: right"><a href="ler.php">voltar</a> </p>
</form>

</body>
</html>