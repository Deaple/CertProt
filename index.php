<html lang="pt-BR">
<head>
	<title>Leitura de CSV</title>
	<meta charset="utf-8">
	<!-- bootstrap -->
	<link rel="stylesheet" href="design/css/bootstrap.css"></script>
	<script src="design/js/jquery.js"></script>
	<script src="design/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
	<h1 class="text-center">IFBA - Cadastro de Eventos</h1>
	<div class="form-group responsive">
		<form class="form-horizontal" enctype="multipart/form-data" action="upload.php" method="POST">
			<label class="col-md-3" for="arquivoUpload">Faça o upload da planilha:</label>
			<input id="arquivoUpload" name="arquivoCSV" type="file" class="form-control-file">
			<small id="fileHelp" class="form-text text-muted">Utilize um arquivo .csv</small>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</div>

</body>
</html>