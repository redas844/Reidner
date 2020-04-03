<?php
	session_start();
	
	include_once("conexao.php");
	
	
	//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 


//Calcular o inicio da visualizacao

	echo "Usuário: ". $_SESSION['usuarioNome'];	
	$id = $_SESSION['usuarioId'];
	

	$result_cursos = "SELECT * FROM cds limit 6";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $total_cursos = mysqli_num_rows($resultado_cursos);
?>
<br>
<a href="edit_cliente.php?a=<?php echo $id?>"><font color="blue" size="4">Alterar meus dados</font></button></a>
<br>
<a href="sair.php"><font color="blue" size="4">Sair</font></a>
<html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Loja de CDs</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="icon" href="imagens/icon.png">
	</head>
	
	<body>
	<body background="imagens/wallpaper.png">
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<h1 class="form-signin-heading"><font color="white"  face="Broadway" size="10">Loja de CDs</font></h1>
					</div>
				
					<div class="col-sm-6 col-md-6">
						<form class="form-inline" method="GET" action="pesquisar.php">
							<div class="form-group">
								<input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Digitar...">
							</div>
							<button type="submit" class="btn btn-primary">Pesquisar</button>
						</form>
					</div>
				</div>
			</div>
			<head>
	<title>Menu Horizontal</title>
	<style type="text/css">
	<!--
		body {
			padding:4px;
			margin:4px;
		}
 
		#menu ul {
			padding:0px;
			margin:0px;
			float: left;
			width: 100%;
			background-color:#EDEDED;
			list-style:none;
			font:100% Broadway;
		}
 
		#menu ul li { display: inline; }
 
		#menu ul li a {
			background-color:#EDEDED;
			color: #333;
			text-decoration: none;
			border-bottom:3px solid #EDEDED;
			padding: 10px 10px;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #2E64FE;
		}
	-->
	</style>
</head>
 
<body>



<center>
	<div id="menu">
		<ul>
		<li><a href="">Axé</a></li>
		<li><a href="">Country</a></li>
		<li><a href="">Eletrônica</a></li>
		<li><a href="">Forró</a></li>
		<li><a href="">Funk</a></li>
		<li><a href="">Gospel</a></li>
		<li><a href="">Hip Hop</a></li>
		<li><a href="">Jazz</a></li>
		<li><a href="">MPB</a></li>
		<li><a href="">Pagode</a></li>
		<li><a href="">POP</a></li>
		<li><a href="">Rap</a></li>
		<li><a href="">Reggae</a></li>
		<li><a href="">Rock</a></li>
		<li><a href="">Samba</a></li>
		<li><a href="">Sertanejo</a></li>
		<li><a href="">Trap</a></li>
		</ul>
	</div>
</center>

<br>

<center>
<script type="text/javascript">
function slide1(){
document.getElementById('id'). src= "imagens/cd1.jpg" ;
setTimeout("slide2()", 1000)
}
  
function slide2(){
document.getElementById('id').src="imagens/cd2.jpg";
setTimeout("slide3()", 1000)
}
  
function slide3(){
document.getElementById('id').src="imagens/cd3.jpg";
setTimeout("slide1()", 1000)
}

document.write ("<br>")
</script>
</center>

<p>
<p>
<p>

<body onLoad="slide1()">
<img id="id">
	<br>
			<div class="row">
							<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
					        <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
							<img src="imagens/icon.png" alt="...">
							<div class="caption text-center">
								<a href="detalhes.php?id_curso=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
								<p><a href="carrinho.php?acao=add&id=<?php echo $rows_cursos['id']; ?>" class="btn btn-primary" role="button">Comprar</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
			 ?>
					</li>
				</ul>
			</nav>
		
	
	</body>
</html>