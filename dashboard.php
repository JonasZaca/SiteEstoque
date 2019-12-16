        
<!doctype html>
<html>
    <!--Jonas Zacari 2016015294
		
-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="pagina1.css" rel="stylesheet" type="text/css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


<body background="img/1231.jpg " class="img-fluid" style="width:100%;">

  <nav class=" navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">Dashboard inicial</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item  active">
            <a href="dashboard.php" class=" nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="ler.php" class="nav-link">Carros</a>
          </li>
          <li class="nav-item">
            <a href="lerAcesso.php" class="nav-link">Usuarios</a>
          </li>
        </ul>
      </div>
  </nav>
      
      
      
  
        <div class="container text-center my-auto">
                      
           

         <h3 class="mb-1"><a href="ler.php" style="color: black"> Cadastrar Carros </a></h3> 
         <h3 class="mb-1"><a href="lerAcesso.php" style="color: black">Cadastrar Usuarios</a></h3>

        </div>
  </div>
  </form>
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
  <script>

    // Get the current year for the copyright
    $("#year").text(new Date().getFullYear());
  </script>
  <script src="js/pagina1.js"></script>

</body>

</html>