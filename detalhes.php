<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 *-->
<?php include_once("conexao.php");
$id_curso = $_GET['id_curso'];
$result_cursos = "SELECT * FROM cds WHERE id='$id_curso'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);
?>
<html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Loja de CDs</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_cursos['nome']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#artista" aria-controls="artista" role="tab" data-toggle="tab">Artista</a></li>
				<li role="presentation"><a href="#estoque" aria-controls="estoque" role="tab" data-toggle="tab">Estoque</a></li>
				<li role="presentation"><a href="#ano" aria-controls="ano" role="tab" data-toggle="tab">Ano</a></li>
				<li role="presentation"><a href="#genero" aria-controls="genero" role="tab" data-toggle="tab">Gênero</a></li>
				<li role="presentation"><a href="#gravadora" aria-controls="gravadora" role="tab" data-toggle="tab">Gravadora</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="artista">
					<?php echo $row_cursos['artista']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="estoque">
					<?php echo $row_cursos['estoque']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="ano">
					<?php echo $row_cursos['ano']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="genero">
					<?php echo $row_cursos['genero']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="gravadora">
					<?php echo $row_cursos['gravadora']; ?>
				</div>
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>