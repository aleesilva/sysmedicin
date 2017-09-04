<div id="page-wrapper">
	  <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                           <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i> Movimento
                        </h3>
                        
                    </div>
                </div>
 <div class="container-fluid">
					

	<div class="col-lg-12">
	   		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Dados Paciente</h4>
                        </div>

                <div class="panel-body">

<form action="" method="GET" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                Busca
                                <input type="date" id="datepicker" name="busca" value ="<?php echo  $busca?>" class="form-control" />

                            </label>
                            <input type="submit" name="btn" class="btn btn-success"  value="Buscar"/>
                        </div>
                        <div class="form-group">

                        </div>

                    </div>
                </div>
            </form>
	<table id ="tabela" class="table table-striped table-bordered table-condensed">
			<caption>
				<h3 id="filtros">Movimento</h3>
			</caption>
			<thead>
			
				<tr>
					<th>Paciente</th>
			    <th>Nome Do Pagante</th>
			    <th>CPF Do Pagante</th>
					<th>Data</th>
					<th>Valor</th>
					<th>Tipo Pagamento</th>
          <th>Ação</th>
				</tr>			
                

			<tbody>
			
			
			<?php foreach ($movimentos as $lista): ?>
			    <tr>
				   <td><?php echo $lista['paciente']; ?></td>
           <td><?php echo $lista['nome_pagante']; ?></td>
           <td><?php echo $lista['cpf_pagante']; ?></td>
				   <td><?php echo date("d/m/Y",strtotime($lista['data'])); ?></td>
				   <td class ="valor-movimentos"><?php echo $lista ['valor']; ?></td>
				   <td><?php echo $lista ['tipo_pagamento'];?></td>
		     	
		     	  <div class="col-lg-3">
            <form action="imprimir-recibo" method="POST">
                <td><input type="hidden" name="id" value="<?=$lista['id']?>">
                <input type="submit" class="btn btn-success" value="Imprimir Recibo">
              </a>
            </td>
          </form>
		     	 <?php endforeach ?>
           </tr>
           </tbody> 
           
          <!-- <tfoot>
           <tr><td><input type="hidden"></td></tr>
           	<tr>
           		<td><div>
           	  Total Movimento:R$<span  id="valor-total">0</span>
           </div></td>
           	</tr>
           </tfoot>-->
           
           <script type="text/javascript" src = "//code.jquery.com/jquery-2.2.1.min.js"></script>
           <script type="text/javascript">
           	var movimentos = $(".valor-movimentos");
           	var somatotal=0;
           	for(var i =0; i<movimentos.length;i++){
           		var total = $(movimentos[i]);
           		var valor =  parseFloat(total.text()); 

           		somatotal = somatotal+valor;
           	}
           	$("#valor-total").text(somatotal);
           </script>
           <script>
		$(function(){
   					 $("#tabela input").keyup(function(){       
        				var index = $(this).parent().index();
        				var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        				var valor = $(this).val().toUpperCase();
        				$("#tabela tbody tr").show();
        				$(nth).each(function(){
           				 if($(this).text().toUpperCase().indexOf(valor) < 0){
              				  $(this).parent().hide();
                        
            }
        });
    });

    				$("#tabela input").blur(function(){
        			$(this).val("");
    });
});
	</script>

      
</table>

</div>
</div>
</div>