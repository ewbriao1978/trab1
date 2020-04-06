<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Exemplo de Banco de Dados PHP</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/ds1/trab1/menu.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/ds1/trab1/listar.php">Listar Automóveis</a>
          <a class="dropdown-item" href="http://localhost/ds1/trab1/pesquisar.php">Pesquisar</a>
          <a class="dropdown-item" href="http://localhost/ds1/trab1/inserir.php">Inserir</a>
         </div>
      </li>
    </ul>
  </div>
</nav>




<?php
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano  = $_POST['ano'];
$km = $_POST['km'];
$preco = $_POST['preco'];

$conexao = mysqli_connect("localhost","root","","AutoBD") or print (mysqli_error());

$query = "INSERT INTO automoveis (marca,modelo,ano,km,preco) VALUES ('$marca','$modelo', $ano, $km, $preco)";
if (mysqli_query($conexao, $query)) {
?> 
<div class="alert alert-info" role="alert">
  <?php echo "<strong>Registro gravado com sucesso</strong>"; ?>
</div>
 
<?php
} else {
?>
  <div class="alert alert-danger" role="alert">
    <?php echo "<strong> Erro: <strong>" . $query . "<br>" . mysqli_error($conexao);?>
  </div>
<?php
}


?>



  </body>
</html>