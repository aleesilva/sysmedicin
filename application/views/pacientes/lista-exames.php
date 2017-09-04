<div id="page-wrapper">
	<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                          <i class="fa fa-list fa-2x"></i> Lista Prontuario
                        </h3>
                        
                    </div>
                </div>
    <div class="container-fluid">


		<div class="panel panel-default">
	   			<div class="panel-heading">
                            <h4 class="panel-title">Lista Prontuario</h4>
                        </div>

                <div class="panel-body">


              <form action="" method="GET" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                Busca
                                <input type="text" name="busca" value ="<?php echo  $busca?>" class="form-control" />

                            </label>
                            <input type="submit" name="btn" class="btn btn-success"  value="Buscar"/>
                        </div>
                        <div class="form-group">

                        </div>

                    </div>
                </div>
            </form>
          

	 
	 	<table id="tabela" class="table table-bordered table-striped">
	 		<caption>
	 			<center><h3 id="filtros">Filtros</h3></center>
	 		</caption>
	 		<thead>
	 			<tr>
	 			 <th>Nome</th>
	 			 <th>Data</th>
	 			 <th>Enxames</th>
	 			 <th>Laborátorio</th>
	 			 <th>Realização</th>
	 			 </tr>
	 			
	 		</thead>
	 		<tbody>
	 			
	 			<?php foreach ($lista as $Listagem): ?>
	 			<tr>
	 				<td><?php echo $Listagem['paciente'];?></td>
	 				<td><?php echo date("d/m/Y",strtotime($Listagem['data_exame']));?></td>
	 				<td><?php echo $Listagem['exames'];?></td>
	 				<td><?php echo $Listagem['laboratorio'];?></td>
	 				<td><?php echo $Listagem['realizacao'];?></td>
	 				
	 				<!-- <td id="links"> 
	 				  <a id="links" href="Exclui-Cliente.php?id=<?=$Listagem['ID_Paciente']?>" class="text-error btn btn-danger">Excluir</a>
	 				</td>
	 				<td id="links"> 
	 				  <a id="links" href="Altera-Cliente-Form.php?id=<?=$Listagem['ID_Paciente']?>" class="text-error btn btn-primary">Alterar</a>
	 				</td> -->

	 			</tr>
	 		<?php endforeach?>
	 		
	 		</tbody>
	 	</table>
	 	<center><?php echo $paginacao; ?></center>
	 </div>
	 </div>
	 </div>
	 </div>
</body>
</html>