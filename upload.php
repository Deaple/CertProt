<html lang="pt-BR">
<head>
	<title>Exibição de Dados</title>
	<meta charset="utf-8">
	<!-- bootstrap -->
	<link rel="stylesheet" href="design/css/bootstrap.css"></script>
	<script src="design/js/jquery.js"></script>
	<script src="design/js/bootstrap.js"></script>
	<style type="text/css">
		.table-condensed{
  			font-size: 12px;
		}
	</style>
</head>
<body>
<div class="container">
	<h2 class="text-center">Listagem de Participantes</h2>
  	<?php
  	function validarArquivo(){
  		if(isset($_FILES)){
  			//validar arquivo aqui
			$arquivoCSV = $_FILES["arquivoCSV"]["name"];

			exibeTabela($arquivoCSV);
		}
	}
	?>

	<?php
	function exibeTabela($arquivoCSV){
	  $delimitador = ',';
	  $cerca = '"';
	  //abre o arquiv na raiz 
	  $arquivo = fopen($arquivoCSV,'r');
	  if($arquivo){
	  	//0 = length/valor
	  	//doc: http://php.net/manual/en/function.fgetcsv.php

	    $cabecalho = fgetcsv($arquivo,0,$delimitador,$cerca);
	    /*echo "<table class=\"table table-hover\">";*/
	    echo "<table class=\"table table-hover table-condensed\">";
	    echo "<thead>";
		echo "<tr>";
	    for ($i=0; $i <sizeof($cabecalho) ; $i++) { 
	    	echo "<th scope=\"row\">$cabecalho[$i]</th>";
	    }
	    echo "</tr>";
		echo "</thead>";	
	    //enquanto houver linhas
		echo "<tbody>";
	    while(!feof($arquivo)){
	    	echo "<tr>";
	    	$linha = fgetcsv($arquivo,0,$delimitador,$cerca);
	    	if(!$linha){
	    		continue;
	    	}
	    	else {
		    	for($j=0;$j<sizeof($linha);$j++){
		    		if(!empty($linha[$j]))
		    			echo "<td>$linha[$j]</td>";
		    	}	
		    	echo "</tr>";
	    	}
	    }
	    
	    echo "</tbody>";
	    echo "</table>";
	  }

	  fclose($arquivo);
	}
	?>
	<button type="button" onclick="history.go(-1);" class="btn btn-primary">Voltar</button>
	<!-- inicio da página -->
	<?php validarArquivo(); ?>
</div>

</body>
</html>