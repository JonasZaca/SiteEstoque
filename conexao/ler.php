
          
<!doctype html>
<html>
    <!--Thiago Martins    RA: 2018025445
		
-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="pagina1.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">





<body background="" class="img-fluid" style="width:100%;">

  <nav class=" navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">Data Tables</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.php" class="nav-link">Home</a>
          </li>
        
          <li class="nav-item active">
            <a href="ler.php" class="nav-link">Tabela</a>
          </li>
        </ul>
      </div>
  </nav>

     
    <?php
include('conexao/check.php');
/*$banco = "aula";
$usuario = "root";
$senha = "";
$hostname = "localhost";

$conn = mysqli_connect($hostname,$usuario,$senha,$banco) or die( "Não foi possível conectar ao banco MySQL");
$result = $conn->query('SELECT * FROM `tb_carro`');
	
*/	
		
		$fbusca="" ;
		$clientes = DBRead('carro',$fbusca, '*' );
?>
<html>
<body>

<div class="container">
  <h1>Bootstrap 3 DataTables</h1>
  <a class="btn btn-success text-light btn-inline btn-lg mb-2 p-1"  name = "button" href="adicionar.php">Inserir</a>

  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Salary</th>
	<th>-</th>
      </tr>
    </thead>
    <tbody>
    <?php // while($dado = $result->fetch_array()) { 
	if (!isset($clientes) || $clientes == false){
				}else{
			foreach($clientes as $dado){
	
	?>
    <tr>
      <td><?php echo $dado['name']; ?></td>
      <td><?php echo $dado['position']; ?></td>
      <td><?php echo $dado['office']; ?></td>
      <td><?php echo $dado['salary']; ?></ ?></td>
      <td>
        <a href="editar.php?codigo=<?php echo $dado['id_carro']; ?>">Editar</a>
        <a href="excluir.php?codigo=<?php echo $dado['id_carro']; ?>">Excluir</a>
  
	  </td>
    </tr>
				<?php } }
	//mysqli_close($conn); 

	?>
	
  </table>
  <a class="btn btn-danger text-light btn-inline btn-lg mt-2 p-1"  name = "button" href="conexao/logout.php">Logout</a>


    </tbody>
 
         
      
        
</div>
      
   <!-- FOOTER -->
   <footer id="main-footer" class="bg-dark text-white mt-2 p-2 fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span>
          </p>
        </div>
      </div>
    </div>
  </footer>




  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    
    <script>
  $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>

    <script>
  // Get the current year for the copyright
    $("#year").text(new Date().getFullYear());
  </script>
  <script src="js/pagina1.js"></script>


</body>
</html>