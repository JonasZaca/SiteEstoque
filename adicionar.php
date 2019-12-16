<?php
include('conexao/check.php');
if (isset($_POST['btnsalvar'])) {
	$cliente=array(
	'marca'=>$_POST['marca'],
	'modelo'=>$_POST['modelo'],
	'ano'=>$_POST['ano'],
	'placa'=>$_POST['placa']
		);
	$grava=DBCreate('carro', $cliente);
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
    <div>
        <label >Marca:</label>
        <input type="text" id="marca" name="marca" />
    </div>
    <div>
        <label >Modelo:</label>
        <input type="text" id="modelo" name="modelo" />
    </div>
    
    <div>
        <label >Ano:</label>
        <input type="text" id="ano" name="ano" />
    </div>
    <div>
        <label >Placa:</label>
        <input type="text" id="placa" name="placa" />
    </div>
    <div class="button">
        <button type="submit" name="btnsalvar">Salvar</button>
    </div>

<p style="text-align: right"><a href="ler.php">voltar</a> </p>
</form>

</body>
</html>