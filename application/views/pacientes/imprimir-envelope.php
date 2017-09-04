<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/bootstrap.css">





<input onclick="print()" type="image" id="imprimir"  src="static/img/btn_imprimir.png">
<?php
	require_once ("application/core/extenso.php");
 	echo '<div class="container" id="container1">';
	echo '<p id="Valorprint">';
	echo $dados['nome'];
	//echo clsTexto::valorPorExtenso("$Valor",true);
	echo '</p>';
	echo '<p id="nomeprint" >';
	echo $dados['data_primeira_consulta'];
	echo '</p>';
	// echo '<p id="ValorExtenso">';
	//  echo clsTexto::valorPorExtenso($paciente['valor'],true);
	
 //    	// echo 'oitocentos reais'; 
	 
	// echo '</p>';
	// echo '<p id="valoremissao">';
	// echo $paciente['data'];
	// echo '</p>';
	// echo '<p id="referente">';
	// echo 'consulta médica';
	// echo '</p>' ;
	// echo '</div>';

 ?>

<?php 
	// 	echo '<div class="container" id="container1">';
	// echo '<p id="Valorprint">';
	// echo $paciente['valor'];
	// //echo clsTexto::valorPorExtenso("$Valor",true);
	// echo '</p>';
	// echo '<p id="nomeprint" >';
	// echo $paciente['paciente'];
	// echo '</p>';
	// echo '<p id="ValorExtenso">';
	// echo clsTexto::valorPorExtenso($paciente['valor'],true);
	
 //    	// echo 'oitocentos reais'; 
	
	// echo '</p>';
	// echo '<p id="valoremissao">';
	// echo $paciente['data'];
	// echo '</p>';
	// echo '<p id="referente">';
	// echo 'consulta médica';
	// echo '</p>' ;
	// echo '</div>';



 ?>


 